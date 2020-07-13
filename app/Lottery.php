<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $table = 'lottery';
    protected $connection = 'mysql2';
}
