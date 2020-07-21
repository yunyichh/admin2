<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    protected $connection = 'mysql3';
    protected $table = 'walletentity';
    protected $primaryKey = 'accountId';
    protected $keyType = 'varchar';
}
