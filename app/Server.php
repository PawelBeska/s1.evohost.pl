<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Server extends Model
{
    protected $fillable = ['name','ip','status','free_space','used_space'];
    public function movies()
    {
        return $this->hasMany('App\Movies',  'server','id')->get();
    }
    public function status()
    {
        return $this->belongsTo('App\Statusserver','status','id')->first();
    }
    #TODO sprawdzanie czy inne serwery są up
    public static function updateStatus($status)
    {
        self::find(Config::get('server.id'))->update(['status'=>Statusserver::statuses($status)]);
        self::find(Config::get('server.id'))->touch();
    }
}
