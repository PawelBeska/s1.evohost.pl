<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->hasMany('App\Permission',  'group','id')->get();
    }
}
