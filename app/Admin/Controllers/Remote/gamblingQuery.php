<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\DB;

class gamblingQuery extends AdminController
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
        $grid->filter(function ($filter) {
            $filter->like('onlyId', ___('OnlyId'));
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
                    //                    $text .= _i(' 账号ID:') . "<br><span>" . number_format($seat['accountId'],0,'','') . "</span><br>";
                    //不合理的sql

                    $starNO = DB::connection('mysql3')->table('accountentity')->where('accountId', $seat['accountId'])->value('starNO');
                    $href = url('admin/players') . '?&starNO=' . $starNO;
                    $text .= _i(' 游戏ID:') . "<a href='$href'>" . $starNO . "</a><br>";
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
//        $grid->column('tableCfgId', ___('TableCfgId'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(gameLog::findOrFail($id));

        $show->field('onlyId', ___('OnlyId'));
        $show->field('bigBlindIndex', ___('BigBlindIndex'));
        $show->field('gameNums', ___('GameNums'));
        $show->field('smallBlindIndex', ___('SmallBlindIndex'));
        $show->field('tableCards', ___('TableCards'));
        $show->field('tableId', ___('TableId'));
        $show->field('tableSeat1Str1', ___('TableSeat1Str1'));
        $show->field('tableSeat1Str2', ___('TableSeat1Str2'));
        $show->field('tableSeat1Str3', ___('TableSeat1Str3'));
        $show->field('tableSeat1Str4', ___('TableSeat1Str4'));
        $show->field('tableSeat1Str5', ___('TableSeat1Str5'));
        $show->field('tableSeat1Str6', ___('TableSeat1Str6'));
        $show->field('tableSeat1Str7', ___('TableSeat1Str7'));
        $show->field('time', ___('Time'));
        $show->field('tableCfgId', ___('TableCfgId'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new gameLog());

        $form->text('onlyId', ___('OnlyId'));
        $form->number('bigBlindIndex', ___('BigBlindIndex'));
        $form->number('gameNums', ___('GameNums'));
        $form->number('smallBlindIndex', ___('SmallBlindIndex'));
        $form->textarea('tableCards', ___('TableCards'));
        $form->number('tableId', ___('TableId'));
        $form->textarea('tableSeat1Str1', ___('TableSeat1Str1'));
        $form->textarea('tableSeat1Str2', ___('TableSeat1Str2'));
        $form->textarea('tableSeat1Str3', ___('TableSeat1Str3'));
        $form->textarea('tableSeat1Str4', ___('TableSeat1Str4'));
        $form->textarea('tableSeat1Str5', ___('TableSeat1Str5'));
        $form->textarea('tableSeat1Str6', ___('TableSeat1Str6'));
        $form->textarea('tableSeat1Str7', ___('TableSeat1Str7'));
        $form->number('time', ___('Time'));
        $form->number('tableCfgId', ___('TableCfgId'));

        return $form;
    }
}
