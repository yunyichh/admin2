<?php

namespace App\Admin\Actions\Robot;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class robotAiType extends RowAction
{
    public $name = '设置机器人明暗比例';

    public function handle(Model $model, Request $request)
    {
        $data['ai_type'] = $request->get('ming') . ',' . $request->get('an');
        $url = getUrl('robot_ai_type') . '?' . http_build_query($data);
        logTxt($url);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        logTxt($result);
        //{"res":"","code":0} 这个是修改货币的返回
        //code  0成功  -1服务器解析错误  -2找不到该账号 -3数量错误，num<=0或者>10000000 -4货币不足
        $codeMsg = [
            0 => '修改成功',
            -1 => '服务器解析错误',
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
        $this->text('ming', ___('ming'))->rules('int')->required();
        $this->text('an', ___('an'))->rules('int')->required();
    }

}