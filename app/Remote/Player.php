<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'accountentity';
    protected $primaryKey = 'accountId';
    protected $keyType = 'varchar';

    public function orderBuy()
    {
        return $this->hasMany('App\Remote\orderBuy', 'orderAccountId', 'accountId');
    }

    public function wallet(){
        return $this->hasMany('App\Remote\wallet', 'accountId', 'accountId');
    }

    public function player2(){
        return $this->hasMany('App\Remote\player2', 'accountId', 'accountId');
    }
}