<?php

namespace App\Console\Commands;

use App\Http\Evo\Evo;
use App\Movie;
use App\Statusfile;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Pbmedia\LaravelFFMpeg\FFMpegFacade as FFMpeg;
use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Server extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'server:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Komenda powoduje start serwera odpowiadającego za pobieranie filmów.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Ustawianie braku czasu odpowiedzi
        ini_set('max_execution_time', 0);
        if (ob_get_level()) ob_end_clean();

        //Pętla nieskończona
        system('clear');
        for ($x = 1; $x > 0; $x++) {

            //1,583GB MIN
            if(disk_free_space(public_path('file/'))/1024/1024/1024<1.5) {
                $this->line(date("G:i:s", time()) . ': [' . "\e[31mERROR\e[39m]: Brak miejsca na dysku!" );
                //Sprawdzenie czy istnieją filmy do usunięcia
                $this->checkForMoviesToRemove();
                \App\Server::updateStatus('out_of_space');
            }else{
                $this->line(date("G:i:s", time()) . ': [' . "\e[32mOK\e[39m]: Na dysku jest ".round(disk_free_space(public_path('file/'))/1024/1024/1024) .'GB wolnego miejsca');
                //Sprawdzenie czy istnieją filmy do usunięcia
                $this->checkForMoviesToRemove();
                //Sprawdzenie czy istnieją filmy do pobrania
                $this->checkForMoviesToDownload();
                \App\Server::updateStatus('turned_on');
            }

            sleep(10);
        }

    }
    public function checkForMoviesToRemove()
    {
        $movies = Movie::where('server',Config::get('server.id'))->wherenotnull('remote_source')->where('remote',1)->where('status',Statusfile::statuses('wait_for_remove'));
        if($movies->count())
        {
            $this->line(date("G:i:s", time()) . ': [' . "\e[32mOK\e[39m]: Możliwe usunięcie " . $movies->count(). ' filmów.');

            foreach ($movies->get() as $movie)
            {
                $this->line( date("G:i:s",time()).': ['."\e[33mWORKING\e[39m]" .' Rozpoczynanie usuwania filmu ID:(' . $movie->id .')');
                File::deleteDirectory(public_path('file/'.$movie->embed));
                $this->line( date("G:i:s",time()).': ['."\e[32mDONE\e[39m]" .' Pomyślnie usunięto film ID:(' . $movie->id .')');
                $movie->delete();
                \App\Server::find(Config::get('server.id'))->update(['free_space'=>round(disk_free_space(public_path('file/'))/1000000000)]);
            }
        }

    }
    public function checkForMoviesToDownload()
    {
        $movies = Movie::where('server',0)->wherenotnull('remote_source')->where('remote',1)->where('status',Statusfile::statuses('wait_for_download'));
        if($movies->count())
        {
           $this->line( date("G:i:s",time()).': ['."\e[33mWORKING\e[39m]" .' Możliwe pobranie ' . $movies->count(). ' filmów.');
            foreach ($movies->get() as $movie)
            {
                $this->line( date("G:i:s",time()).': ['."\e[33mWORKING\e[39m]" .' Rozpoczynanie pobierania filmu ID:(' . $movie->id .')');
                $movie->update(['server'=>Config::get('server.id'),'status'=>Statusfile::statuses('downloading'),'embed'=>str_random(32)]);
                $to_mp4 = false;
                $mime='.mp4';
                switch (true) {
                    case strpos($movie->remote_source, 'fileone.tv') !== false:
                        $source = Evo::services('Fone', $movie->remote_source);
                        $mime = '.mp4';

                        break;
                    case strpos($movie->remote_source, 'bitporno.com') !== false:
                        $source = Evo::services('Bit', $movie->remote_source);
                        $mime = '.mp4';
                        break;
                    default:
                        if(strpos($movie->remote_source,'.avi') !== false)
                        {
                            $mime = '.avi';
                        }
                        elseif(strpos($movie->remote_source,'.mp4') !== false){
                            $mime = '.mp4';
                        }

                        $source = $movie->remote_source;
                        break;
                }
                $process = new Process('aria2c -d "'.public_path('file/'.$movie->embed).'" -o '.$movie->embed.$mime.' -x 13 -s 13 '.$source);
                $process->setTimeout(0);
                $process->run(function ($type, $buffer) {
                   $this->line( $buffer);
                    \App\Server::updateStatus('turned_on');
                });
                $process->wait();
                $movie->update(['status'=>Statusfile::statuses('downloaded'),'source'=>$movie->embed.'/'.$movie->embed.'.mp4']);
                FFMpeg::fromDisk('public')->open($movie->embed.'/'.$movie->embed.'.mp4')
                    ->getFrameFromSeconds(30)
                    ->export()
                    ->toDisk('public')
                    ->save($movie->embed.'/'.$movie->embed.'.jpg');
                $this->line(date("G:i:s",time()).': ['."\e[32mDONE\e[39m]" .' Pomyślnie zapisano okładkę ' . $movie->embed.'/'.$movie->embed.'.jpg');
                $movie->update(['poster'=>$movie->embed.'/'.$movie->embed.'.jpg','size'=>filesize(public_path('file/'.$movie->embed.'/'.$movie->embed.'.mp4'))/1024/1024/1024]);
                \App\Server::find(Config::get('server.id'))->update(['free_space'=>round(disk_free_space(public_path('file/'))/1024/1024/1024)]);

            }
        }

    }
}
