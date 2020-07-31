<?php

namespace App\Admin\Actions\Event;

use Encore\Admin\Actions\BatchAction;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Delete extends BatchAction
{
    protected $selector = '.delete';

    function name()
    {
        $html = " <a class=\"btn btn-sm btn-default delete\">" . _i('删除赛事') . "</a>";
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
        $data['remove_type'] = 1;
        $url = getUrl('eventManagementDelete');
        logTxt($url);
        $result = getHttpResponseGET($url, $data);
        logTxt($result);
        $codeMsg = [
            0 => '删除成功',
            -1 => '没有该周赛',
            -2 => '有玩家报名，不能删除'
        ];
        $res = @$result['res'];
        $flag = false;
        $msg = null;
        if (!empty($res)) {
            $flag = true;
            if (is_array($res)) {
                foreach ($res as $rk => $rv) {
                    if ($rv != 0) {
                        $flag = false;
                    }
                    $msg[] = $rk . @$codeMsg[$rv];
                }
            }
        }
        if ($flag) {
            return $this->response()->success('Success')->refresh();
        } else {
            return $this->response()->error((implode(';', $msg)))->refresh();
        }
    }

}