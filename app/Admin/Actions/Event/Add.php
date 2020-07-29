<?php

namespace App\Admin\Actions\Event;

use Encore\Admin\Actions\Action;
use Encore\Admin\Grid;
use Illuminate\Http\Request;

class Add extends Action
{
    protected $selector = '.add';

    public function handle(Request $request)
    {
        $data['apply_time'] = strtotime($request->get('apply_time')) * 1000;
        $data['end_time'] = strtotime($request->get('end_time')) * 1000;
        $data['game_id'] = $request->get('game_id');
        $data['apply_cost'] = $request->get('apply_cost');
        $data['open_num'] = $request->get('open_num');
        $data['differ_hour'] = $request->get('differ_hour');
        $award1 = $request->get('award1');
        $award2 = $request->get('award2');
        if (count($award1) != count($award2)) {
            return $this->response()->error(_i('���ʧ��'))->refresh();
        }
        $data['award'] = json_encode(array_combine($award1, $award2));
        $data['charge'] = $request->get('charge');

        $url = "http://192.168.1.23:8001/addGame";
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url, $data);

        $result = $response->getBody();
        if ($result == 'succ') {
            return $this->response()->success('Success')->refresh();
        } else {
            return $this->response()->success('Fail' . json_encode($result))->refresh();
        }
    }

    public function form()
    {
        $this->datetime('apply_time', ___('Apply time'))->default(date('Y-m-d H:i:s'));
        $this->datetime('end_time', ___('End time'))->default(date('Y-m-d H:i:s', time() + 7 * 24 * 60 * 60));
        $this->text('game_id', ___('Game id'))->default(1);
        $this->text('apply_cost', ___('Apply cost'));
        $this->text('open_num', ___('Open num'));
        $this->text('differ_hour', ___('Differ hour'));
        $this->multipleSelect('award1', ___('ranking'))->options(['1,1' => _i('��һ��'), '2,2' => _i('�ڶ���'), '3,3' => _i('������'), '4,4' => _i('������'), '5,5' => _i('������'), '6,6' => _i('������'), '7,7' => _i('������'), '8,8' => _i('�ڰ���'), '9,9' => _i('�ھ���'), '10,10' => _i('������'), '4,5' => _i('���ĵ�����'), '6,10' => _i('������ʮ��'), '3,50' => _i('��������ʮ'), '4,50' => _i('���ĵ���ʮ'), '5,50' => _i('���嵽��ʮ')]);
        $this->multipleSelect('award2', ___('Award'))->options([5000 => 5000, 3000 => 3000, 2000 => 2000, 1000 => 1000, 900 => 900, 800 => 800, 700 => 700, 600 => 600, 500 => 500, 300 => 300, 200 => 200, 100 => 100, 50 => 50]);
//        $this->text('award', _i('{"x,x":"����һ"}','{"x,x":"������"}...'));
        $this->text('charge', ___('Charge'));
    }

    public function html()
    {
        $html = ' <a class="btn btn-sm btn-default add" style="float: right">' . _i("�������") . '</a>';
        return <<<HTML
        $html
HTML;
    }
}