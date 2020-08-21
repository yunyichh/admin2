<?php

namespace App\Admin\Actions\Notice;

use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;

class Add extends Action
{
    protected $selector = '.add';

    public function handle(Request $request)
    {
        $data['notice_id'] = 0;
        $data['notice_type'] = $request->get('notice_type');
        $data['level'] = $request->get('level');
        $data['start_time'] = strtotime($request->get('start_time')) * 1000;
        $data['end_time'] = strtotime($request->get('end_time')) * 1000;
        $data['channel'] = $request->get('channel');
        $data['title'] = urlencode($request->get('title'));
        $data['content'] = urlencode($request->get('content'));
        $data['operation_type'] = 1;
        $data['operation_account'] = \Admin::user()->username;
        $data['language'] = $request->get('language');

        $url = getUrl('notice');
        logTxt($url);
        logTxt($data);
        $result = getHttpResponseGET($url, $data);
        $result = json_decode($result, true);
        logTxt($result);
        $codeMsg = [
            0 => '修改成功',
            -1 => '服务器解析错误',
        ];
        if (isset($result['code'])&&$result['code'] == 0) {
            return $this->response()->success(($codeMsg[$result['code']]))->refresh();
        } elseif (isset($result['code'])&&in_array($result['code'], array_keys($codeMsg))) {
            return $this->response()->error(($codeMsg[$result['code']]))->refresh();
        } else {
            return $this->response()->error(json_encode($result))->refresh();
        }
    }

    public function form()
    {
        $this->select('notice_type', ___('Notice type'))->options(['登录公告', '游戏公告'])->default(1)->required();
        $this->text('level', ___('Level'))->default(0)->required();
        $this->datetime('start_time', ___('Start time'))->default(date('Y-m-d H:i:s', time()))->required();
        $this->datetime('end_time', ___('End time'))->required();
        $this->text('channel', ___('Channel'))->default(1)->required();
        $this->text('title', ___('Title2'))->required();
        $this->textarea('content', ___('Content2'))->required();
        $this->select('language', ___('Language'))->options([1 => '中文', 2 => '英文'])->default(1)->required();
    }

    public function html()
    {
        $html = ' <a class="btn btn-sm btn-default add">' . ___('添加公告') . '</a>';
        return <<<HTML
        $html
HTML;
    }
}