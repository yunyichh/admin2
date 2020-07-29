<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class changeGoldRecord extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'changegoldrecordentity';

    public function account()
    {
        return $this->belongsTo('App\Remote\Player', 'accountId', 'accountId');
    }
}
