<?php

namespace App\Admin\Controllers;

use App\controlWinLose;
use App\controlWinLoseLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;

class controlWinLoseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\controlWinLose';

    function __construct()
    {
        $this->title = _i('µ÷¿ØÅäÖÃ');

    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $tab = new Tab();
        $tab->addLink(_i('µ÷¿ØÅäÖÃ'), url('admin/control-win-loses'));
        $tab->addLink(_i('µ÷¿Ø¼ÇÂ¼'), url('admin/control-win-lose-logs'));

        $grid = new Grid(new controlWinLose());

        $grid->header(function ($query) use ($tab) {
            return $tab->render();
        });
        $grid->column('id', ___('Id'));
        $grid->column('frequencyRange', ___('FrequencyRange'));
        $grid->column('rechargeLimit', ___('RechargeLimit'));
        $grid->column('winTriggerProportion', ___('WinTriggerProportion'));
        $grid->column('winTargetProportion', ___('WinTargetProportion'));
        $grid->column('loseTriggerProportion', ___('LoseTriggerProportion'));
        $grid->column('loseTargetProportion', ___('LoseTargetProportion'));
        $grid->column('totalTimes', ___('TotalTimes'));
        $grid->column('loseDifficultIndex', ___('LoseDifficultIndex'));
        $grid->column('winDifficultIndex', ___('WinDifficultIndex'));
//        $grid = $tab->render();

        return $grid->render();
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(controlWinLose::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('frequencyRange', ___('FrequencyRange'));
        $show->field('rechargeLimit', ___('RechargeLimit'));
        $show->field('winTriggerProportion', ___('WinTriggerProportion'));
        $show->field('winTargetProportion', ___('WinTargetProportion'));
        $show->field('loseTriggerProportion', ___('LoseTriggerProportion'));
        $show->field('loseTargetProportion', ___('LoseTargetProportion'));
        $show->field('totalTimes', ___('TotalTimes'));
        $show->field('loseDifficultIndex', ___('LoseDifficultIndex'));
        $show->field('winDifficultIndex', ___('WinDifficultIndex'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new controlWinLose());

        $form->text('frequencyRange', ___('FrequencyRange'));
        $form->text('rechargeLimit', ___('RechargeLimit'));
        $form->text('winTriggerProportion', ___('WinTriggerProportion'));
        $form->text('winTargetProportion', ___('WinTargetProportion'));
        $form->text('loseTriggerProportion', ___('LoseTriggerProportion'));
        $form->text('loseTargetProportion', ___('LoseTargetProportion'));
        $form->text('totalTimes', ___('TotalTimes'));
        $form->text('loseDifficultIndex', ___('LoseDifficultIndex'));
        $form->text('winDifficultIndex', ___('WinDifficultIndex'));

        return $form;
    }
}
