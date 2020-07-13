<?php

namespace App\Admin\Controllers;

use App\controlWinLoseLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Tab;

class controlWinLoseLogControlller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\controlWinLoseLog';

    function __construct()
    {
        $this->title = _i('调控记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $tab = new Tab();
        $tab->addLink(_i('调控配置'), url('admin/control-win-loses'));
        $tab->addLink(_i('调控记录'), url('admin/control-win-lose-logs'),true);

        $grid = new Grid(new controlWinLoseLog());
        $grid->header(function ($query) use ($tab) {
            return $tab->render();
        });
        $grid->column('id', ___('Id'));
        $grid->column('controlId', ___('ControlId'));
        $grid->column('time', ___('Time'));
        $grid->column('rechargeAmount', ___('RechargeAmount'));
        $grid->column('triggerControlAmount', ___('TriggerControlAmount'));

        $grid->column('endAdjustAmount', ___('EndAdjustAmount'));
        $grid->column('triggerControlAmount2', ___('TriggerControlAmount2'));
        $grid->column('endAdjustAmount2', ___('EndAdjustAmount2'));
        $grid->column('remainingControlTimes', ___('RemainingControlTimes'));
        $grid->column('totalWinLose', ___('TotalWinLose'));
        $grid->column('stateTrigger', ___('StateTrigger'));
        $grid->column('regulationOfLose', ___('RegulationOfLose'));
        $grid->column('regulationOfWin', ___('RegulationOfWin'));
        $grid->column('is_complete', ___('Is complete'));
//        $grid->column('created_at', ___('Created at'));
//        $grid->column('updated_at', ___('Updated at'));

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
        $show = new Show(controlWinLoseLog::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('controlId', ___('ControlId'));
        $show->field('time', ___('Time'));
        $show->field('rechargeAmount', ___('RechargeAmount'));
        $show->field('triggerControlAmount', ___('TriggerControlAmount'));
        $show->field('endAdjustAmount', ___('EndAdjustAmount'));
        $show->field('triggerControlAmount2', ___('TriggerControlAmount2'));
        $show->field('endAdjustAmount2', ___('EndAdjustAmount2'));
        $show->field('remainingControlTimes', ___('RemainingControlTimes'));
        $show->field('totalWinLose', ___('TotalWinLose'));
        $show->field('stateTrigger', ___('StateTrigger'));
        $show->field('regulationOfLose', ___('RegulationOfLose'));
        $show->field('regulationOfWin', ___('RegulationOfWin'));
        $show->field('is_complete', ___('Is complete'));
//        $show->field('created_at', ___('Created at'));
//        $show->field('updated_at', ___('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new controlWinLoseLog());

        $form->text('controlId', ___('ControlId'));
        $form->number('time', ___('Time'));
        $form->text('rechargeAmount', ___('RechargeAmount'));
        $form->text('triggerControlAmount', ___('TriggerControlAmount'));
        $form->text('endAdjustAmount', ___('EndAdjustAmount'));
        $form->text('triggerControlAmount2', ___('TriggerControlAmount2'));
        $form->text('endAdjustAmount2', ___('EndAdjustAmount2'));
        $form->text('remainingControlTimes', ___('RemainingControlTimes'));
        $form->text('totalWinLose', ___('TotalWinLose'));
        $form->text('stateTrigger', ___('StateTrigger'));
        $form->text('regulationOfLose', ___('RegulationOfLose'));
        $form->text('regulationOfWin', ___('RegulationOfWin'));
        $form->switch('is_complete', ___('Is complete'));

        return $form;
    }
}
