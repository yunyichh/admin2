<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventManagement extends Model
{
    protected $table = 'event_management';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
