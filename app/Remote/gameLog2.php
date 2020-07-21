<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class gameLog2 extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'gamerecordentity';

    public function gameLog()
    {
        return $this->hasMany('App\Remote\gameLog', 'onlyId', 'tableId');
    }
    public function account()
    {
        return $this->hasMany('App\Remote\Player', 'accountId', 'accountId');
    }
}
