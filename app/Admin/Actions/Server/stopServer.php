<?php

namespace App\Admin\Actions\Server;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class stopServer extends RowAction
{
    public $name = '';

    public function handle(Model $model)
    {
        $data = null;
        if ($model->status == 'true') {
            $data['state'] = 2;
        } else {
            $data['state'] = 1;
        }
        $data['channel'] = "[{$model->channel}]";
        $url = getUrl('set_stop');
        logTxt($url);
        logTxt($data);
        $result = getHttpResponseGET($url, $data);
        $result = json_decode($result, true);
        logTxt($result);
        $codeMsg = [
            0 => _i('修改成功'),
            -1 => _i('服务器解析错误'),
        ];
        if (isset($result['code']) && $result['code'] == 0) {
            return $this->response()->success(($codeMsg[$result['code']]))->refresh();
        } elseif (isset($result['code']) && in_array($result['code'], array_keys($codeMsg))) {
            return $this->response()->error(($codeMsg[$result['code']]))->refresh();
        } else {
            return $this->response()->error(json_encode($result))->refresh();
        }
    }

    public function display($value)
    {
        $on = '<span style="color:darkgreen;text-decoration: underline">'._i('已开启').'</span>';
        $off = '<span style="color:darkred;text-decoration: underline">'._i('已关闭').'</span>';
        $map = [
            'true' => $on,
            'false' => $off
        ];
        return $map[$value];
    }
}