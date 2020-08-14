<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class chance extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'dzpkcontrolconfig';
}
