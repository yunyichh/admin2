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
use App\Remote\gameLog2;
use Encore\Admin\Grid;

class showGameLog2 implements Renderable
{
    protected static $starNO = null;

    public function setNO($starNO)
    {
        self::$starNO = $starNO;
    }

    public function render()
    {
//        return self::grid2()->render();
    }

    protected static function grid2()
    {
        $gameLog = null;
        $account = null;

        $grid = new Grid(new gameLog2());
        $grid->disableCreateButton();
        $grid->disableColumnSelector();
        $grid->disableActions();
        $grid->disableFilter();
        $grid->disableCreateButton();
        $grid->disableExport();
        $grid->actions(function ($action) {
            $action->disableEdit();
            $action->disableView();
            $action->disableDelete();
        });
//        $grid->column('id', ___('Id'));
        $grid->model()->join('accountentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId')->where('accountentity.robotFlag', 0)->orderBy('time', 'desc');

        if (\Admin::user()->inRoles(['agent'])) {
            $grid->model()->where('accountentity.recommended', \Admin::user()->agentId);
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
        $grid->column('id', ___('gameDetails'))->display(function () {
            return _i('查看对局详情');
        })->expand(function ($model) {
            $cbHandData = trim(getColumnData($this->gamelog, $this->accountId)['cbHandData'], ',[]');
            $gameLog = json_decode($this->gamelog[0], true);
            $data = null;
            $columns = ['onlyId', 'tableCards', 'tableSeat1Str1', 'tableSeat1Str2', 'tableSeat1Str3', 'tableSeat1Str4', 'tableSeat1Str5', 'tableSeat1Str6', 'tableSeat1Str7'];
            foreach ($gameLog as $key => $value) {
                if (in_array($key, $columns)) {
                    if ($key == 'onlyId') {
                        $data[___($key)] = trim($value);
                    }
                    if ($key == 'tableCards') {
                        $data[___($key)] = trim($value, ',[]');
                    }
                    if (preg_match('/tableSeat1[\w]+/', $key)) {
                        $text_value = null;
                        $arr_value = json_decode($value, true);
                        $style_color = "style = 'color:darkred'";
                        if ($cbHandData == trim(@$arr_value['cbHandData'], ',[]')) {
                            $text_value .= "<p $style_color>";
                            $text_value .= !empty($arr_value) ? (___('winOrLoseMoney') . ':' . @$arr_value['winOrLoseMoney'] . '<br>') : '';
                            $text_value .= !empty($arr_value) ? (___('cbHandData') . ':' . trim(@$arr_value['cbHandData'], ',[]') . '<br>') : '';
                            $text_value .= "</p>";
                        } else {
                            $text_value .= !empty($arr_value) ? (___('winOrLoseMoney') . ':' . @$arr_value['winOrLoseMoney'] . '<br>') : '';
                            $text_value .= !empty($arr_value) ? (___('cbHandData') . ':' . trim(@$arr_value['cbHandData'], ',[]') . '<br>') : '';
                        }

                        $data[___($key)] = $text_value;

                    }
                    if ($key == 'time') {
                        $data[___($key)] = date('Y-m-d H:i:s', $value / 1000);
                    }
                }
            }

//           dump(array_keys($gameLog));
//           dump(array_values($gameLog));die;
            return new Table(array_keys($data), [array_values($data)], ['']);

        });
        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();


        return $grid;
    }
}