<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class ChangeMoneyLog extends RowAction
{
    public $name = '修改金币记录';

    public function href()
    {
       return url('/admin/change-money-logs');
    }
}