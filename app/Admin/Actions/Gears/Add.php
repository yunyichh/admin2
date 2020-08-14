<?php

namespace App\Admin\Actions\Gears;

use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;

class Add extends Action
{
    //挡位控制之添加
    protected $selector = '.add';

    public function handle(Request $request)
    {
        $data['type'] = 1;
        $data['id'] = $request->get('id');
        $data['weight'] = $request->get('weight');
        $data['chance'] = $request->get('chance');
        $data['buffTime'] = $request->get('buffTime');

        $url = getUrl('gears');
        logTxt($url);
        logTxt($data);
        $result = getHttpResponseGET($url, $data);
        logTxt($result);
        $result = @json_decode($result, true);
        if (isset($result['code']) && $result['code'] >= 0) {
            return $this->response()->success('Success')->refresh();
        } elseif (isset($result['code']) && $result['code'] < 0) {
            return $this->response()->error($result['res'])->refresh();
        } else {
            return $this->response()->success('Success')->refresh();
        }
    }

    public function form()
    {
        $this->integer('id', ___('id control'))->required();
        $this->integer('weight', ___('weight control'))->required();
        $this->integer('chance', ___('chance control'))->required();
        $this->integer('buffTime', ___('buffTime control'))->required();
    }

    public function html()
    {
        return <<<HTML
        <a class="btn btn-sm btn-default add">添加</a>
HTML;
    }
}