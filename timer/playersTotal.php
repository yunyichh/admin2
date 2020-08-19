<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/19
 * Time: 10:12
 */

use Illuminate\Support\Facades\DB;

if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
    Swoole\Timer::tick(5000, function () {
        $dataTotal = DB::connection('mysql3')->table('gamerecordentity')->select(DB::raw(" accountId,sum(money) as totalAll"))->whereNotIn('tableCfgId', [401, 402, 403])->groupBy('accountId')->get();
        $dataToday = DB::connection('mysql3')->table('gamerecordentity')->select(DB::raw(" accountId,sum(money) as totalToday"))->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->groupBy('accountId')->get();
        $dataTotal = json_decode($dataTotal, true);
        $dataToday = json_decode($dataToday, true);
        DB::table('players_total')->truncate();
        DB::table('players_total')->insert($dataTotal);
        DB::table('players_today')->truncate();
        DB::table('players_today')->insert($dataToday);
    });
}
