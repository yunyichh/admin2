<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Widgets\Table;
use App\Admin\Extensions\gameLog2Exporter;
use Illuminate\Http\Request;

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
    function grid()
    {
        $gameLog = null;
        $account = null;

        $grid = new Grid(new gameLog2());
        $grid->disableCreateButton();
        $grid->disableColumnSelector();
        $grid->disableActions();
        $grid->disableBatchActions();

        $grid->filter(function ($filter) {
            $filter->like('account.starNO', ___('gameId'));
            $filter->like('account.accountName', ___('accountName'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('time', '>', $time);
            }, ___('gameStartTime'))->datetime();
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('time', '<', $time);
            }, ___('gameEndTime'))->datetime();
        });
        $grid->disableCreateButton();
        $grid->actions(function ($action) {
            $action->disableEdit();
            $action->disableView();
            $action->disableDelete();
        });
//        $grid->column('id', ___('Id'));
        $grid->model()->join('accountentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId');
        $grid->model()->limit(30);
        $grid->model()->where('accountentity.robotFlag', 0);
        $grid->model()->orderBy('time', 'desc');

        if (Admin::user()->inRoles(['agent'])) {
            $grid->model()->where('accountentity.recommended', Admin::user()->agentId);
        }
        $grid->column('starNO', ___('gameId'))->display(function () {
            $account = @$this->account['starNO'];
            return $account;
        });
        $grid->column('accountName', ___('accountName'))->display(function () {
            $account = @$this->account['accountName'];
            return $account;
        });
        $grid->column('gameName', ___('gameName'))->display(function () {
            $gameName = [1 => _i('德州扑克')];
            return $gameName[$this->gameId];
        });
        //{"accountId":281543696188447,"bGamed":true,"winOrLoseMoney":-30,"betMoney":30,"money":138,"integral":0,"cbHandData":"[黑桃K,黑桃2,]","seatId":1,"actState":2}

        $grid->column('tableCfgIf', ___('status'))->display(function () {
            $status = [
                401 => '单桌',
                402 => '双人桌',
                403 => '周赛',
                'other' => '自由桌'
            ];
            if (in_array($this->tableCfgId, array_keys($status))) {
                return _i($status[$this->tableCfgId]);
            } else {
                return _i($status['other']);
            }
        });
        $grid->column('scoreAfterGame', ___('leftGold2'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['money']);
        });

        $grid->column('oldMoney', ___('oldMoney'));

        $grid->column('scoreBet', ___('scoreBet'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['betMoney']);
        });
        $grid->column('scoreWin', ___('winOrloseScore'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['winOrLoseMoney']);
        });
//        $grid->column('scoreLose', ___('scoreLose'))->display(function () {
//            return -intval(getColumnData($this->gamelog, $this->accountId)['winOrLoseMoney']);
//        });
//
        $grid->column('cbHandData', ___('cbHandData'))->display(function () {
            return trim(getColumnData($this->gamelog, $this->accountId)['cbHandData'], ',[]');
        });
//        $_this = $this;
//        $grid->column('id', ___('gameDetails'))->display(function () use ($_this) {
//            if (!empty($_this->preSet))
//                return _i('查看');
//            return _i('查看对局详情');
//        })->expand(function ($model) {
//            $cbHandData = trim(getColumnData($this->gamelog, $this->accountId)['cbHandData'], ',[]');
//            $gameLog = json_decode($this->gamelog[0], true);
//            $data = null;
//            $columns = ['onlyId', 'tableCards', 'tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
//            foreach ($gameLog as $key => $value) {
//                if (in_array($key, $columns)) {
//                    if ($key == 'onlyId') {
//                        $data[___($key)] = trim($value);
//                    }
//                    if ($key == 'tableCards') {
//                        $data[___($key)] = trim($value, ',[]');
//                    }
//                    if (preg_match('/tableSeat1[\w]+/', $key)) {
//                        $text_value = null;
//                        $arr_value = json_decode($value, true);
//                        $style_color = "style = 'color:darkred'";
//                        if ($cbHandData == trim(@$arr_value['cbHandData'], ',[]')) {
//                            $text_value .= "<p $style_color>";
//                            $text_value .= !empty($arr_value) ? (___('winOrLoseMoney') . ':' . @$arr_value['winOrLoseMoney'] . '<br>') : '';
//                            $text_value .= !empty($arr_value) ? (___('cbHandData') . ':' . trim(@$arr_value['cbHandData'], ',[]') . '<br>') : '';
//                            $text_value .= "</p>";
//                        } else {
//                            $text_value .= !empty($arr_value) ? (___('winOrLoseMoney') . ':' . @$arr_value['winOrLoseMoney'] . '<br>') : '';
//                            $text_value .= !empty($arr_value) ? (___('cbHandData') . ':' . trim(@$arr_value['cbHandData'], ',[]') . '<br>') : '';
//                        }
//                        $data[___($key)] = $text_value;
//
//                    }
//                    if ($key == 'time') {
//                        $data[___($key)] = date('Y-m-d H:i:s', $value / 1000);
//                    }
//                }
//            }
////           dump(array_keys($gameLog));
////           dump(array_values($gameLog));die;
//            return new Table(array_keys($data), [array_values($data)], ['']);
//        });
        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
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
