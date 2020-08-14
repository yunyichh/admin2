<?php

namespace App\Admin\Actions\Pool;

use Encore\Admin\Actions\Action;
use Illuminate\Http\Request;

class poolEdit extends Action
{
    protected $selector = '.add';

    public function handle(Request $request)
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

    public function form()
    {
        $this->integer('dzpk_pool', ___('dzpk_pool'));
        $this->integer('dzpk_award_pool', ___('dzpk_award_pool'));
        $this->integer('dzpk_pool_N', ___('dzpk_pool_N'));
        $this->integer('dzpk_pool_M', ___('dzpk_pool_M'));
        $this->integer('dzpk_chance', ___('dzpk_chance'))->help(___('dzpk_chance_help'));
    }

    public function html()
    {
        $html = '<a class="btn btn-sm btn-default add" style="float: right">' . ___('dzpk_pool_conf') . '</a>';
        return <<<HTML
        $html
HTML;
    }
}