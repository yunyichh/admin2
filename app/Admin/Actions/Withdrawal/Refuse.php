<?php

namespace App\Admin\Actions\Withdrawal;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Refuse extends RowAction
{
    public $name = '反对';

    public function handle(Model $model)
    {
        // $model ...

        return $this->response()->success('Success message.')->refresh();
    }

}