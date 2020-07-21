<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class gameLog2Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\gameLog2';

    protected function title()
    {
        return _i('会员游戏记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $gameLog = null;
        $account = null;

        $grid = new Grid(new gameLog2());
        $grid->filter(function ($filter) {
            $filter->like('gameId', ___('gameId'));
            $filter->like('account.accountName', ___('accountName'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000 - 8 * 60 * 60 * 1000;
                $query->where('time', '>', $time)->where('time', '<', (($time) + (24 * 60 * 60) * 1000));
            }, ___('time'))->date();
        });
        $grid->disableCreateButton();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();
        });

        $grid->column('accountName', ___('accountName'))->display(function () {
            $account = @$this->account[0]['accountName'];
            return $account;
        });
        $grid->column('gameId', ___('GameId'));
        //{"accountId":281543696188447,"bGamed":true,"winOrLoseMoney":-30,"betMoney":30,"money":138,"integral":0,"cbHandData":"[黑桃K,黑桃2,]","seatId":1,"actState":2}
        $grid->column('oldMoney', ___('scoreBeforeGame'));
        $grid->column('scoreAfterGame', ___('scoreAfterGame'))->display(function () {
            $gameLog = $this->gameLog;
            $data = null;
            $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($column_target as $column) {
                if (@strpos($gameLog[0][$column], $this->accountId) !== false) {
                    $data = json_decode($gameLog[0][$column], true);
                    break;
                }
            }
//           {"accountId":281543696190488,"bGamed":true,"winOrLoseMoney":-20,"betMoney":20,"money":9910,"integral":0,"cbHandData":"[梅花5,方块J,]","seatId":5,"actState":2}
            return intval($data['money']);
        });
        $grid->column('scoreBet', ___('scoreBet'))->display(function () {
            $gameLog = $this->gameLog;
            $data = null;
            $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($column_target as $column) {
                if (@strpos($gameLog[0][$column], $this->accountId) !== false) {
                    $data = json_decode($gameLog[0][$column], true);
                    break;
                }
            }
//           {"accountId":281543696190488,"bGamed":true,"winOrLoseMoney":-20,"betMoney":20,"money":9910,"integral":0,"cbHandData":"[梅花5,方块J,]","seatId":5,"actState":2}
            return intval($data['betMoney']);
        });
        $grid->column('scoreWin', ___('scoreWin'))->display(function () {
            $gameLog = $this->gameLog;
            $data = null;
            $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($column_target as $column) {
                if (@strpos($gameLog[0][$column], $this->accountId) !== false) {
                    $data = json_decode($gameLog[0][$column], true);
                    break;
                }
            }
//           {"accountId":281543696190488,"bGamed":true,"winOrLoseMoney":-20,"betMoney":20,"money":9910,"integral":0,"cbHandData":"[梅花5,方块J,]","seatId":5,"actState":2}
            return intval($data['winOrLoseMoney']);
        });
        $grid->column('scoreLose', ___('scoreLose'))->display(function () {
            $gameLog = $this->gameLog;
            $data = null;
            $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($column_target as $column) {
                if (@strpos($gameLog[0][$column], $this->accountId) !== false) {
                    $data = json_decode($gameLog[0][$column], true);
                    break;
                }
            }
//           {"accountId":281543696190488,"bGamed":true,"winOrLoseMoney":-20,"betMoney":20,"money":9910,"integral":0,"cbHandData":"[梅花5,方块J,]","seatId":5,"actState":2}
            return -intval($data['winOrLoseMoney']);
        });
//        $grid->column('id', ___('Id'));


        $grid->column('scoreAfterGame', ___('inventory'))->display(function () {
            $gameLog = $this->gameLog;
            $data = null;
            $column_target = ['tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($column_target as $column) {
                if (@strpos($gameLog[0][$column], $this->accountId) !== false) {
                    $data = json_decode($gameLog[0][$column], true);
                    break;
                }
            }
//           {"accountId":281543696190488,"bGamed":true,"winOrLoseMoney":-20,"betMoney":20,"money":9910,"integral":0,"cbHandData":"[梅花5,方块J,]","seatId":5,"actState":2}
            return $data['money'];
        });
        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) + 8 * 60 * 60);
        })->sortable();
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
        $show = new Show(gameLog2::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('gameId', ___('GameId'));
        $show->field('money', ___('Money'));
        $show->field('time', ___('Time'));
        $show->field('tableId', ___('TableId'));
        $show->field('oldMoney', ___('OldMoney'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new gameLog2());

        $form->number('accountId', ___('AccountId'));
        $form->number('gameId', ___('GameId'));
        $form->number('money', ___('Money'));
        $form->number('time', ___('Time'));
        $form->textarea('tableId', ___('TableId'));
        $form->number('oldMoney', ___('OldMoney'));

        return $form;
    }
}
