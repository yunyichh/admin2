<?php

namespace App\Admin\Actions\Gears;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Delete extends RowAction
{
    public $name = '删除';

    public function handle(Model $model,Request $request)
    {
        $data['type'] = 3;
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
    public function form(Model $model)
    {
        $this->integer('id', ___('id control'))->default($model->id);
        $this->integer('weight', ___('weight control'))->default($model->weight);
        $this->integer('chance', ___('chance control'))->default($model->chance);
        $this->integer('buffTime', ___('buffTime control'))->default($model->buffTime);
    }
}