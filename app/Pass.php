<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Pass extends Model
{
    protected $table = 'pass';
    protected $fillable = ['movie','ip','pass'];
    /*
   * Tworzenie nowego tokenu dla filmu {$MOVIE}
   */
    public static function createPass($movie)
    {
       return self::create(['movie'=>$movie,'ip'=>Request::ip(),'pass'=>str_random(16)]);
    }
    public function delete()
    {

    }
    public function movie()
    {
        return $this->belongsTo('App\Movie','movie','id')->first();
    }
    public function url()
    {
        return route('player',['embed'=>$this->movie()->embed,'pass'=>$this->pass]);
    }
}
