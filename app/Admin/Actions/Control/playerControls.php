<?php

namespace App\Admin\Actions\Control;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class playerControls extends RowAction
{
    public $name = '编辑';

    public function handle(Request $request)
    {
        $data['accountId'] = $request->get('accountId');
        $data['dzpkAward'] = $request->get('dzpkAward');
        $data['dzpkAwardChance'] = $request->get('dzpkAwardChance');
        $data['time'] = $request->get('dzpkTime');
        $url = getUrl('player_control') . '?' . http_build_query($data);
        logTxt($url);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        logTxt($result);
        //{"res":"","code":0} 这个是修改货币的返回
        //code  0成功  -1服务器解析错误
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

    public function form($model)
    {
        $this->integer('accountId', ___('AccountId'))->default($model->accountId)->required();
        $this->integer('dzpkAward', ___('DzpkAward'))->default($model->dzpkAward)->required();
        $this->integer('dzpkAwardChance', ___('DzpkAwardChance'))->default($model->dzpkAwardChance)->required();
        $this->integer('dzpkTime', ___('DzpkTime'))->default($model->dzpkTime)->required();
    }
}