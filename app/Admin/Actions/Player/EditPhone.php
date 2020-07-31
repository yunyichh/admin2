<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EditPhone extends RowAction
{
    public $name = '修改手机';

    public function handle(Model $model, Request $request)
    {
        $data['account_id'] = $model->accountId;

        $data['phone'] = $request->get('phone');

        $url = getUrl('changePhone') . '?' . http_build_query($data);
        logTxt($url);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        logTxt($result);
        $codeMsg = [
            0 => '修改成功',
            -1 => '服务器 解析错误',
            -2 => '没有该账号',
            -3 => 'phone必须是数字',
            -4 => 'phone长度错误'
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
        $this->mobile('phone', '新手机号')->rules('required')->style('width','100%');
    }

}