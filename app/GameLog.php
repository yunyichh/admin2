<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameLog extends Model
{
    protected $table = 'gamelog';
    protected $connection = 'mysql2';
}
