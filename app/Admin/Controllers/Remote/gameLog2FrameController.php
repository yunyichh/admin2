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

class gameLog2FrameController extends AdminController
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
//        $grid->disableFilter();
        $grid->disableBatchActions();
        $grid->paginate(50);

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
        $grid->model()->limit(50);
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
            $data = getColumnData($this->gamelog, $this->accountId);
            return intval(isset($data['money']) ? $data['money'] : 0);
        });

        $grid->column('oldMoney', ___('oldMoney'));

        $grid->column('scoreBet', ___('scoreBet'))->display(function () {
            $data = getColumnData($this->gamelog, $this->accountId);
            return intval(isset($data['betMoney']) ? $data['betMoney'] : 0);
        });
        $grid->column('scoreWin', ___('winOrloseScore'))->display(function () {
            $data = getColumnData($this->gamelog, $this->accountId);
            return intval(isset($data['winOrLoseMoney']) ? $data['winOrLoseMoney'] : 0);
        });
//        $grid->column('scoreLose', ___('scoreLose'))->display(function () {
//            return -intval(getColumnData($this->gamelog, $this->accountId)['winOrLoseMoney']);
//        });
//
        $grid->column('cbHandData', ___('cbHandData'))->display(function () {
            $data = getColumnData($this->gamelog, $this->accountId);
            return trim(isset($data['cbHandData']) ? $data['cbHandData'] : ' ', ',[]');
        });
        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();

        modalNextRender($grid);
    }


}
