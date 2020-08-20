<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notice extends Model
{
    protected $connection = 'mysql6';
    protected $table = 'notice';
}
