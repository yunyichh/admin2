<?php

namespace App\Admin\Actions\Event;

use Encore\Admin\Actions\BatchAction;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Admin\Controllers\eventManagementController;

class Delete extends BatchAction
{
    protected $selector = '.delete';

    protected $base_uri = null;

    function __construct()
    {
        parent::__construct();
        $this->base_uri = eventManagementController::$base_uri;
    }

    function name()
    {
        $html = " <a class=\"btn btn-sm btn-default delete\">" . _i('É¾³ıÈüÊÂ') . "</a>";
        return $html;
    }

    public function handle(Collection $collection, Request $request)
    {
        $data = null;
        $only_ids = null;
        foreach ($collection as $model) {
            $only_ids[] = $model->id;
            $data['game_id'] = (int)$model->game_id;
        }
        $data['only_ids'] = "[" . implode(',', $only_ids) . "]";
        $url = $this->base_uri . "/removeGame";
        $result = getHttpResponseGET($url, $data);
        if ($result == 'succ') {
            return $this->response()->success('Success')->refresh();
        } else {
            return $this->response()->error('Fail' . json_encode($result))->refresh();
        }
    }

}