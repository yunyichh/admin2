<?php

namespace App\Admin\Actions\Event;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Delete extends RowAction
{
    public $name = ('删除赛事');

    function __construct()
    {
        parent::__construct();
       $this->name = _i('删除赛事');
    }

    public function handle(Model $model, Request $request)
    {
        $data = null;
        $only_ids = null;
        if ($model instanceof Collection) {
            foreach ($model as $_model) {
                $only_ids[] = $_model->id;
                $data['game_id'] = (int)$_model->game_id;
            }
        } else {
            $only_ids[] = $model->id;
            $data['game_id'] = (int)$model->game_id;
        }

        $data['only_ids'] = "[" . implode(',', $only_ids) . "]";
        $data['remove_type'] = 1;
        $url = getUrl('eventManagementDelete');
        logTxt($url);
        $result = getHttpResponseGET($url, $data);
        $result = json_decode($result, true);
        logTxt($result);
        $codeMsg = [
            0 => '删除成功',
            -1 => '没有该周赛',
            -2 => '有玩家报名，不能删除'
        ];
        $res = $result['res'];

        $flag = true;
        $msg = null;
        if (!empty($res)) {
            if (is_array($res)) {
                logTxt('res is array');
                foreach ($res as $rk => $rv) {
                    logTxt("$rk => $rv");
                    if ($rv != 0) {
                        $flag = false;
                    }
                    $msg[] = _i($codeMsg[$rv]);
                    logTxt($msg);
                }
            } else {
                logTxt('res is not array:');
                logTxt($res);
            }
        }
        if ($flag) {
            return $this->response()->success('Success')->refresh();
        } else {
            return $this->response()->error((implode(";\r\n", $msg)))->refresh();
        }
    }

}