<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Pass;
use App\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class MovieController extends Controller
{
    public function player($embed,$pass)
    {

        if(Movie::where('embed',$embed)->count()>0) {
            if(Pass::where('pass',$pass)->where('ip',\request()->ip())->count()>0){


              $file = 'file/'.Movie::where('embed',$embed)->first()->source;


               if(strpos(Pass::where('pass',$pass)->first()->movie()->source,'.avi') !== false)
               {
                   $mime = 'video/x-msvideo';
               }
               elseif(strpos(Pass::where('pass',$pass)->first()->movie()->source,'.mp4') !== false){
                $mime = 'video/mp4';
                }
                $size = filesize($file);
                $length = $size;
                $start = 0;
                $end = $size - 1;

                header(sprintf('Content-type: %s', $mime));
                header('Accept-Ranges: bytes');

                if(isset($_SERVER['HTTP_RANGE']))
                {
                    $c_start = $start;
                    $c_end = $end;

                    list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);

                    if(strpos($range, ',') !== false)
                    {
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                        header(sprintf('Content-Range: bytes %d-%d/%d', $start, $end, $size));

                        exit;
                    }

                    if($range == '-')
                    {
                        $c_start = $size - substr($range, 1);
                    }
                    else
                    {
                        $range  = explode('-', $range);
                        $c_start = $range[0];
                        $c_end   = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size;




                    }

                    $c_end = ($c_end > $end) ? $end : $c_end;

                    if($c_start > $c_end || $c_start > $size - 1 || $c_end >= $size)
                    {
                        header('HTTP/1.1 416 Requested Range Not Satisfiable');
                        header(sprintf('Content-Range: bytes %d-%d/%d', $start, $end, $size));
                        echo 1;
                        exit;
                    }

                    header('HTTP/1.1 206 Partial Content');

                    $start = $c_start;
                    $end = $c_end;
                    $length = $end - $start + 1;
                }

                header("Content-Range: bytes $start-$end/$size");
                header(sprintf('Content-Length: %d', $length));

                $fh = fopen($file, 'rb');
                $buffer = 1024 * 8;

                fseek($fh, $start);

                while(true)
                {
                    if(ftell($fh) >= $end)
                    {
                        break;
                    }

                    set_time_limit(0);

                    echo fread($fh, $buffer);

                    flush();
                }
            }return abort(404);
        } return abort(404);
    }
    public function playerImage($embed,$pass)
    {
        if(Movie::where('embed',$embed)->count()>0) {
            if (Pass::where('pass', $pass)->where('ip', \request()->ip())->count() > 0) {
                $path = 'file/'.Movie::where('embed',$embed)->first()->poster;
                if (!File::exists('file/'.Movie::where('embed',$embed)->first()->poster)) {
                    abort(404);
                }
                $file = File::get($path);
                $type = File::mimeType($path);
                $response = Response::make($file, 200);
                $response->header("Content-Type", $type);

                return $response;
            }
        }
    }
}
