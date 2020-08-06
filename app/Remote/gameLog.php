<?php

namespace App\Remote;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class gameLog extends Model
{
    protected $connection = 'mysql4';
    protected $table = 'gamerecordentity';
}
