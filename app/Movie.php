<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','size','remote','views','server','status','embed','author','remote_source','source','poster'];
    public function group()
    {
        return $this->belongsTo('App\User','author','id')->first();
    }
    public function server()
    {
        return $this->belongsTo('App\Server','server','id')->first();
    }
    public function status()
    {
        return $this->belongsTo('App\Statusfile','status','id')->first();
    }
    public function views()
    {
        return $this->hasMany('App\View',  'movie','id')->get();
    }
}
