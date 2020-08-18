<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class playerControl extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'playercontrolentity';
    public function account()
    {
        return $this->belongsTo('App\Remote\Player', 'accountId', 'accountId');
    }
    public function gameLog2(){
        return $this->hasMany('App\Remote\gameLog2', 'accountId', 'accountId');
    }
    public function playersToday(){
        return $this->hasMany('App\Remote\playerToday', 'accountId', 'accountId');
    }
    public function playersTotal(){
        return $this->hasMany('App\Remote\playerTotal', 'accountId', 'accountId');
    }
}
