<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/11
 * Time: 14:03
 */

namespace App\Admin\Extensions;

use Illuminate\Contracts\Support\Renderable;
use App\Remote\Player;
use Encore\Admin\Grid;
use Encore\Admin\Widgets\Table;


class showGameLog2 implements Renderable
{
    public function render($key = null)
    {
        return $this->grid()->render();
    }

    function grid()
    {
        $gameLog = null;
        $account = null;

        $grid = new Grid(new Player());
        $grid->disableCreateButton();
        $grid->disableColumnSelector();
        $grid->disableActions();

        $grid->disableCreateButton();
        $grid->actions(function ($action) {
            $action->disableEdit();
            $action->disableView();
            $action->disableDelete();
        });

//        $grid->column('id', ___('Id'));
        $grid->model()->join('gamerecordentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId', 'left');
        $grid->model()->limit(30);
        $grid->model()->where('accountentity.robotFlag', 0);
//        $grid->model()->where('accountentity.starNO', 0);
        $grid->model()->orderBy('time', 'desc');

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
        $grid->column('cbHandData', ___('cbHandData'))->display(function () {
            return trim(getColumnData($this->gamelog, $this->accountId)['cbHandData'], ',[]');
        });

        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();

        return $grid;
    }
}