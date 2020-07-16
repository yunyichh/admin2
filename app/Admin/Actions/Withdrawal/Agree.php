<?php

namespace App\Admin\Actions\Withdrawal;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Agree extends RowAction
{
    public $name = '同意';

    public function handle(Model $model)
    {
        // $model ...

        return $this->response()->success('Success message.')->refresh();
    }

}