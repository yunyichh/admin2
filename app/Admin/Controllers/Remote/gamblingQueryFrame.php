<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\DB;

class gamblingQueryFrame extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\gameLog';

    function title()
    {
        return _i('牌局查询');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new gameLog());
        $grid->disableActions();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        $grid->disableCreateButton();
        $grid->filter(function ($filter) use ($grid) {
            $filter->like('onlyId', ___('OnlyId'));
//            $input = null;
//            $filter->where(function ($query) use ($grid) {
//                $tableIds = DB::connection('mysql3')->table('gamerecordentity')->where('accountId', 'like',$this->input)->pluck('tableId')->toArray();
//                $query->whereIn('onlyId',$tableIds);
//            }, ___('accountId'));
        });

        $grid->model()->orderBy('time', 'desc');
        $grid->column('onlyId', ___('OnlyId'));
//        $grid->column('bigBlindIndex', ___('BigBlindIndex'));
//        $grid->column('gameNums', ___('GameNums'));
//        $grid->column('smallBlindIndex', ___('SmallBlindIndex'));
        $grid->column('tableCards', ___('TableCards'))->display(function () {
            return trim($this->tableCards, '[],');
        });
//        $grid->column('tableId', ___('TableId'

        $tableSeatStr = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];

        foreach ($tableSeatStr as $item) {
            $strItem = null;
            $strItem = (string)$item;
            $grid->column($strItem, ___($strItem))->display(function () use ($strItem) {
                //{"accountId":281543696188492,"bGamed":true,"winOrLoseMoney":20,"betMoney":50,"money":5819,"integral":0,"cbHandData":"[梅花5,黑桃2,]","seatId":1,"actState":4}
                $seat = json_decode($this->{(string)$strItem}, true);
                $text = null;
                if (!empty($seat['accountId'])) {
//                    $text .= _i(' 账号ID:') . "<br><span>" . number_format($seat['accountId'], 0, '', '') . "</span><br>";
                    //不合理的sql
                    $account = DB::connection('mysql3')->table('accountentity')->where('accountId', $seat['accountId'])->get(['robotFlag', 'starNO'])->toArray();
                    $href = url('admin/players') . '?&starNO=' . $account[0]->starNO;
                    $text .= _i(' 游戏ID:') . (($account[0]->robotFlag == 0) ? ("<a href='$href'>" . $account[0]->starNO . "</a><br>") : ("<span>" . $account[0]->starNO . "</span><br>"));
                }
                if (!empty($seat['winOrLoseMoney']) || (isset($seat['winOrLoseMoney']) && $seat['winOrLoseMoney'] == 0))
                    $text .= _i('输赢筹码:') . "<span>" . $seat['winOrLoseMoney'] . "</span><br>";
                if (!empty($seat['cbHandData']))
                    $text .= _i(' 手牌:') . "<span>" . trim($seat['cbHandData'], '[],') . "</span>";
                if (empty($seat)) {
                    $text .= _i('');
                }
                return $text;
            });
        }
        $grid->column('time', ___('Time'))->display(function () {
            return date('Y-m-d H:i:s', ($this->time) / 1000);
        });
        $links = [
            "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css",
            "http://{$_SERVER['HTTP_HOST']}/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css",
        ];
        $link_text = null;
        foreach ($links as $link) {
            if (strpos($link, 'css') !== false)
                $link_text .= '<link rel="stylesheet" href="' . $link . '">';
            else {
                $link_text .= "<script src='" . $link . "'></script>";
            }
        }
        $style_text = "
        <style type='text/css'>
            td{font-size: 12px}
            th{font-size: 13px}
        </style>";
        exit($link_text . $style_text . $grid->render());
    }
}
