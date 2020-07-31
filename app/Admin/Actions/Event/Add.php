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
        $data['game_id'] = (int)$request->get('game_id');
        $data['apply_cost'] = floatval($request->get('apply_cost'));
        $data['open_num'] = (int)$request->get('open_num');
        $data['differ_hour'] = (int)$request->get('differ_hour');
        $award1 = $request->get('award1');
        $award2 = $request->get('award2');
        if (!empty($award1) && !empty($award2)) {
            foreach ($award2 as $ak => $av) {
                $award2[$ak] = intval($av);
            }
            if (count($award1) != count($award2)) {
                return $this->response()->error(_i('添加失败'))->refresh();
            }
            $data['award'] = json_encode(array_combine($award1, $award2), true);
        }
        $data['charge'] = (int)$request->get('charge');

        $url = getUrl('eventManagementAdd');
        logTxt($url);
        logTxt($data);
        $result = getHttpResponseGET($url, $data);
        logTxt($result);
        if ($result == 'succ') {
            return $this->response()->success('Success')->refresh();
        } else {
            return $this->response()->error('Fail' . json_encode($result))->refresh();
        }
    }

    public function form()
    {
        $this->datetime('apply_time', ___('Apply time'))->default(date('Y-m-d H:i:s'))->required();
        $this->datetime('end_time', ___('End time'))->default(date('Y-m-d H:i:s', time() + 7 * 24 * 60 * 60))->required();
        $this->text('game_id', ___('Game id'))->default(1)->required();
        $this->text('apply_cost', ___('Apply cost'))->required();
        $this->text('open_num', ___('Open num'))->required();
        $this->text('differ_hour', ___('Differ hour'))->required();
        $this->multipleSelect('award1', ___('ranking'))->options(['1,1' => _i('第一名'), '2,2' => _i('第二名'), '3,3' => _i('第三名'), '4,4' => _i('第四名'), '5,5' => _i('第五名'), '6,6' => _i('第六名'), '7,7' => _i('第七名'), '8,8' => _i('第八名'), '9,9' => _i('第九名'), '10,10' => _i('第五名'), '4,5' => _i('第四到五名'), '6,10' => _i('第六到十名'), '3,50' => _i('第三到五十'), '4,50' => _i('第四到五十'), '5,50' => _i('第五到五十')])->required();
        $this->multipleSelect('award2', ___('Award') . _i('（与名次对应）'))->options([5000 => 5000, 3000 => 3000, 2000 => 2000, 1000 => 1000, 900 => 900, 800 => 800, 700 => 700, 600 => 600, 500 => 500, 300 => 300, 200 => 200, 100 => 100, 50 => 50])->required();
//        $this->text('award', _i('{"x,x":"奖励一"}','{"x,x":"奖励二"}...'));
        $this->text('charge', ___('Charge'))->required();
    }

    public function html()
    {
        $html = ' <a class="btn btn-sm btn-default add" style="float: right">' . _i("添加赛事") . '</a>';
        return <<<HTML
        $html
HTML;
    }
}