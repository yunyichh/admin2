<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DistributionGold extends RowAction
{
    public $name = '发放金币';

    public function handle(Model $model, Request $request)
    {
        $playId = $model->starNO;
        $accountId = $model->accountId;

        $goldType = $request->get('type');
        $money = $request->get('money');
        if ($goldType == 1)
            $newUrl = "chanageAccountMoney";//修改账号金币
        if ($goldType == 2)
            $newUrl = "chanageVaultMoney";//修改金库金币

        if ($goldType == 3)
            $newUrl = "chanageSafeMoney";//修改保险箱金币

        $url = getValue($newUrl) . ' ' . implode(' ', [$accountId, $money, null]);
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $result = json_decode($response->getBody(), true);
        if ($result['code'] == 0)
            return $this->response()->success('操作成功')->refresh();
        else
            return $this->response()->error('操作失败'.$response->getBody())->refresh();
    }

    public function form()
    {
        $type = [
            1 => '携带金币',
            2 => '金库金币',
            3 => '聚宝盆金币',
        ];

        $this->select('type', '类型')->options($type)->rules('required');
        $this->text('money', '发放数量')->rules('required');
    }

}