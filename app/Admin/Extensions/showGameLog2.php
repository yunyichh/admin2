<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/11
 * Time: 14:03
 */

namespace App\Admin\Extensions;

use Illuminate\Contracts\Support\Renderable;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\DB;

class showGameLog2 implements Renderable
{
    public function render($key = null)
    {
        $columns = ['starNO', 'accountName', 'gameId', 'tableCfgId', 'scoreAfterGame', 'oldMoney', 'scoreBet', 'scoreWin', 'cbHandData', 'id', 'time'];
        $data = DB::connection('mysql3')->table('gamerecordentity')
            ->join('accountentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId')
//            ->where('accountentity.starNO', $this->starNO)
            ->where('accountentity.robotFlag', 0)
            ->orderBy('gamerecordentity.time', 'desc')->limit(10)->get($columns);
        dump($data);
        exit();
        new Table($columns, json_decode($data,true));
    }
}