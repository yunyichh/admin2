<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class player2 extends Model
{
    protected $connection = 'mysql4';
    protected $table = 'playerentity';
    protected $primaryKey = 'accountId';
    protected $keyType = 'varchar';
}
