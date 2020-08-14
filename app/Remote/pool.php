<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class pool extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'controlmap';
}
