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
}
