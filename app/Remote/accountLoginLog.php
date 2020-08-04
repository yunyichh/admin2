<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class accountLoginLog extends Model
{
   protected $connection = 'mysql3';
   protected $table = 'accountloginlogentity';
    public function account()
    {
        return $this->belongsTo('App\Remote\Player', 'accountId', 'accountId');
    }
}
