<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'qpplatform.accountentity';
    protected $primaryKey = 'accountId';
    protected $keyType = 'varchar';

    public function orderBuy()
    {
        return $this->hasOne('App\Remote\orderBuy', 'orderAccountId', 'accountId');
    }

    public function wallet(){
        return $this->hasOne('App\Remote\wallet', 'accountId', 'accountId');
    }

    public function player2(){
        return $this->hasOne('App\Remote\player2', 'accountId', 'accountId');
    }

    public function gameLog2(){
        return $this->hasMany('App\Remote\gameLog2', 'accountId', 'accountId');
    }
}
