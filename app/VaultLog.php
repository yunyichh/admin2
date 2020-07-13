<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaultLog extends Model
{
    protected $table = 'vaultlog';
    protected $connection = 'mysql2';
}
