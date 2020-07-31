<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DistributionGold extends RowAction
{
    public $name = '发放金币';

    public function handle(Model $model, Request $request)
    {
        $data['change_type'] = 1;
        $data['gm_account'] = \Admin::user()->username;
        $data['account_id'] = $model->accountId;
        $data['currency_type'] = $request->get('currency_type');
        $data['num'] = $request->get('num');

        $url = getUrl('changeMoney') . '?' . http_build_query($data);
        logTxt($url);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        logTxt($result);
        //{"res":"","code":0} 这个是修改货币的返回
        //code  0成功  -1服务器解析错误  -2找不到该账号 -3数量错误，num<=0或者>10000000 -4货币不足
        $codeMsg = [
            0 => '发放成功',
            -1 => '服务器解析错误',
            -2 => '找不到该账号',
            -3 => '数量错误',
            -4 => '货币不足'
        ];
        if ($result['code'] == 0) {
            return $this->response()->success(($codeMsg[$result['code']]))->refresh();
        } elseif (in_array($result['code'], array_keys($codeMsg))) {
            return $this->response()->error(($codeMsg[$result['code']]))->refresh();
        } else {
            return $this->response()->error(json_encode($result))->refresh();
        }
    }

    public function form()
    {
        $type = [
            1 => '金币',
            2 => '钻石',
        ];
        $this->select('currency_type', '类型')->options($type)->rules('required');
        $this->text('num', '发放数量')->rules('required|int');
    }
}