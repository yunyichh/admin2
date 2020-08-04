<?php

namespace App\Admin\Actions\Event;

use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;
//use App\eventManagementAwards;
//use Encore\Admin\Grid;

class Awards extends Action
{
    protected $selector = '.config';

    public function handle(Request $request)
    {
        // $request ...

        return $this->response()->success('Success message...')->refresh();
    }

    public function html()
    {
        $html = ' <a class="btn btn-sm btn-default">' . _i("½±ÀøÅäÖÃ") . '</a>';
        return <<<HTML
        $html
HTML;
    }
}