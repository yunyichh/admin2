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
        return _i('»áÔ±ÓÎÏ·¼ÇÂ¼');
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
        $grid->disableCreateButton();
        $grid->disableColumnSelector();
        $grid->disableActions();
        $grid->filter(function ($filter) {
            $filter->like('gameId', ___('gameName'));
            $filter->like('account.accountName', ___('accountName'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000 ;
                $query->where('time', '>', $time);
            }, ___('gameStartTime'))->datetime();
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000 ;
                $query->where('time', '<', $time);
            }, ___('gameEndTime'))->datetime();
        });
        $grid->disableCreateButton();
        $grid->actions(function($action){
            $action->disableEdit();
            $action->disableView();
            $action->disableDelete();
        });
//        $grid->column('id', ___('Id'));
        $grid->model()->join('accountentity', 'accountentity.accountId', '=', 'gamerecordentity.accountId')->where('accountentity.robotFlag', 0);
        $grid->column('accountName', ___('accountName'))->display(function () {
            $account = @$this->account['accountName'];
            return $account;
        });
        $grid->column('gameId', ___('gameName'));
        //{"accountId":281543696188447,"bGamed":true,"winOrLoseMoney":-30,"betMoney":30,"money":138,"integral":0,"cbHandData":"[ºÚÌÒK,ºÚÌÒ2,]","seatId":1,"actState":2}
        $grid->column('oldMoney', ___('scoreBeforeGame'));

        $grid->column('scoreAfterGame', ___('scoreAfterGame'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['money']);
        });
        $grid->column('scoreBet', ___('scoreBet'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['betMoney']);
        });
        $grid->column('scoreWin', ___('scoreWin'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['winOrLoseMoney']);
        });
        $grid->column('scoreLose', ___('scoreLose'))->display(function () {
            return -intval(getColumnData($this->gamelog, $this->accountId)['winOrLoseMoney']);
        });

        $grid->column('inventory', ___('inventory'))->display(function () {
            return intval(getColumnData($this->gamelog, $this->accountId)['money']);
        });
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
