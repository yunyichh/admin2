<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SendEmail extends RowAction
{
    public $name = '发送邮件';

    public function handle(Model $model, Request $request)
    {
        $playId = $model->starNO;
        $accountId = $model->accountId;

        $title = $request->get('title');
        $content = $request->get('content');
        $content = urlencode(base64_encode(utf8_encode($content)));

        $url = getValue('sendSystemMail') . ' ' . implode(' ', [$title, $content, "[" . $accountId . "]", null]);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        if ($result['code'] == 0)
            return $this->response()->success('发送成功')->refresh();
        else
            return $this->response()->error('发送失败'.$response->getBody())->refresh();
    }

    public function form()
    {
        $this->text('title', '邮件标题')->rules('required');
        $this->textarea('content', '邮件内容')->rules('required');
    }

}