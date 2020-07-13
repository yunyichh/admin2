<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LockOrUnLockAccount extends RowAction
{
    public $name = '账号编辑';

    public function handle(Model $model, Request $request)
    {
        $playId = $model->starNO;
        $accountId = $model->accountId;

        $type = $request->get('type');
        $longTime = $request->get('longTime');
        $longTime = strtotime($longTime).'000';

        $url = getValue('lockOrUnLock') . ' ' . implode(' ', [$accountId, $type, $longTime, null]);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        if ($result['code'] == 0)
            return $this->response()->success('修改成功')->refresh();
        else
            return $this->response()->error('修改失败'.$url)->refresh();
    }

    public function form()
    {
        $type = [
            1 => '冻结',
            2 => '正常'
        ];

        $this->select('type', '类型')->options($type)->rules('required');
        $this->datetime('longTime', '结束日期')->rules('required');
    }

}