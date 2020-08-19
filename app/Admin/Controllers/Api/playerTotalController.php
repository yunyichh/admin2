<?php

namespace App\Admin\Controllers\Api;

use App\Remote\Player;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class playerTotalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\Player';

    public function __construct()
    {
        $dataTotal = DB::connection('mysql3')->table('accountentity')->leftJoin('gamerecordentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId')->select(DB::raw("accountentity.accountId,sum(gamerecordentity.money) as totalAll"))->whereNotIn('gamerecordentity.tableCfgId', [401, 402, 403])->groupBy('accountentity.accountId')->get();
        $dataToday = DB::connection('mysql3')->table('gamerecordentity')->select(DB::raw("accountId,sum(money) as totalToday"))->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->groupBy('accountId')->get();
        $dataTotal = json_decode($dataTotal, true);
        $dataToday = json_decode($dataToday, true);
        DB::connection('mysql3')->table('htgg.players_total')->truncate();
        DB::connection('mysql3')->table('htgg.players_total')->insert($dataTotal);
        foreach ($dataToday as $item) {
            DB::connection('mysql3')->table('htgg.players_total')->where('accountId', $item['accountId'])->update(['totalToday' => $item['totalToday']]);
        }

    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
    }
}
