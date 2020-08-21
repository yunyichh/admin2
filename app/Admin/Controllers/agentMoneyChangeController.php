<?php

namespace App\Admin\Controllers;

use App\agentMoneyChange;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class agentMoneyChangeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\agentMoneyChange';

    function title()
    {
        return _i('代理金币变化');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new agentMoneyChange());
        $grid->disableColumnSelector();
        $grid->disableExport();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->filter(function($filter){
            $filter->like('agentId', ___('agentId'));
            $filter->like('starNo', ___('StarNO'));
        });
        $grid->disableActions();
        $grid->model()->orderBy('time', 'desc');
        $grid->column('agentId', ___('AgentId'));
        $grid->column('starNo', ___('StarNO'));
//        $grid->column('uuid', ___('Uuid'));
//        $grid->column('accountId', ___('AccountId'));
        $grid->column('source', ___('change_type'));
//        $grid->column('change_type', ___('change_type'))->display(function () {
//            $map = [
//                'user_off_line_change' => 1,
//                'lobby_game_change' => 2,
//                'agent_login_change' => 3,
//                'agent_low_score_change' => 4,
//                'agent_up_score_change' => 5,
//                'gm' => 6,
//            ];
//            return @$map[$this->changeType];
//        });
        $grid->column('changeMoney', ___('ChangeMoney'));
        $grid->column('oldMoney', ___('OldMoney'));
        $grid->column('nowMoney', ___('NowMoney'));


        $grid->column('time', ___('Time'))->display(function () {
            return date('Y-m-d H:i:s', $this->time / 1000);
        })->sortable();
//        $grid->column('changeType', ___('ChangeType'));


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
        $show = new Show(agentMoneyChange::findOrFail($id));

        $show->field('uuid', ___('Uuid'));
        $show->field('accountId', ___('AccountId'));
        $show->field('agentId', ___('AgentId'));
        $show->field('changeMoney', ___('ChangeMoney'));
        $show->field('nowMoney', ___('NowMoney'));
        $show->field('oldMoney', ___('OldMoney'));
        $show->field('source', ___('Source'));
        $show->field('time', ___('Time'));
        $show->field('changeType', ___('ChangeType'));
        $show->field('starNo', ___('StarNo'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new agentMoneyChange());

        $form->text('uuid', ___('Uuid'));
        $form->number('accountId', ___('AccountId'));
        $form->text('agentId', ___('AgentId'));
        $form->number('changeMoney', ___('ChangeMoney'));
        $form->number('nowMoney', ___('NowMoney'));
        $form->number('oldMoney', ___('OldMoney'));
        $form->text('source', ___('Source'));
        $form->number('time', ___('Time'));
        $form->number('changeType', ___('ChangeType'));
        $form->text('starNo', ___('StarNo'));

        return $form;
    }
}
