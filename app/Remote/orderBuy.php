<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class orderBuy extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'orderbuyentity';
}
