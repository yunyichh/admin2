<?php

namespace App\Admin\Actions\Notice;

use Encore\Admin\Actions\Action;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Edit extends RowAction
{
    public $name = '编辑';

    public function handle(Request $request)
    {
        $data['notice_id'] = $request->get('notice_id');
        $data['notice_type'] = $request->get('notice_type');
        $data['level'] = $request->get('level');
        $data['start_time'] = strtotime($request->get('start_time')) * 1000;
        $data['end_time'] = strtotime($request->get('end_time')) * 1000;
        $data['channel'] = $request->get('channel');
        $data['title'] = urlencode($request->get('title'));
        $data['content'] = urlencode($request->get('content'));
        $data['operation_type'] = 2;
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
        $row = $this->getRow();
        $this->text('notice_id', ___('Notice id'))->default($row['notice_id'])->required();
        $this->select('notice_type', ___('Notice type'))->options([0=>'登录公告', 1=>'游戏公告'])->default($row['notice_type'])->required();
        $this->text('level', ___('Level'))->default($row['level'])->required();
        if (!empty($row['start_time'])) {
            $this->datetime('start_time', ___('Start time'))->default(date('Y-m-d H:i:s', $row['start_time']/1000))->required();
        } else {
            $this->datetime('start_time', ___('Start time'))->required();
        }
        if (!empty($row['end_time'])) {
            $this->datetime('end_time', ___('End time'))->default(date('Y-m-d H:i:s', $row['end_time']/1000))->required();
        } else {
            $this->datetime('end_time', ___('End time'))->required();
        }
        $this->text('channel', ___('Channel'))->default($row['channel'])->required();
        $this->text('title', ___('Title2'))->default($row['title'])->required();
        $this->textarea('content', ___('Content2'))->default($row['content'])->required();
        $this->select('language', ___('Language'))->options([1 => '中文', 2 => '英文'])->default(1)->required();
    }

    public function html()
    {
        return <<<HTML
        <a class="btn btn-sm btn-default edit">修改</a>
HTML;
    }
}