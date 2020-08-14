<?php

namespace App\Admin\Actions\Pool;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class poolRowEdit extends RowAction
{
    public $name = '编辑';

    public function handle(Model $model, Request $request)
    {
        $data['dzpk_pool'] = $request->get('dzpk_pool');
        $data['dzpk_award_pool'] = $request->get('dzpk_award_pool');
        $data['dzpk_award_pool'] = $request->get('dzpk_award_pool');
        $data['dzpk_pool_N'] = $request->get('dzpk_pool_N');
        $data['dzpk_pool_M'] = $request->get('dzpk_pool_M');
        $data['dzpk_chance'] = $request->get('dzpk_chance');

        $url = getUrl('pool');
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

        if ($model->mapKey == 'dzpk_chance')
            $this->integer('dzpk_chance', ___('dzpk_chance'))->default($model->mapValue)->required()->help(___('dzpk_chance_help'));
        else {
            $this->integer($model->mapKey, ___($model->mapKey))->required()->default($model->mapValue);
        }
    }

}