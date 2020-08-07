<?php

namespace App\Admin\Controllers;

use App\changeMoneyLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class changeMoneyLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\changeMoneyLog';

    function title()
    {
        return _i('½ğ±ÒĞŞ¸Ä¼ÇÂ¼');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new changeMoneyLog());
        $grid->disableCreateButton();
        $grid->disableBatchActions();
        $grid->disableExport();
        $grid->disableActions();
        $grid->filter(function ($filter) {
            $filter->like('accountId', ___('AccountId'));
        });


//        $grid->column('uuid', ___('Uuid'));
        $grid->column('accountId', ___('AccountId'));
//        $grid->column('changeType', ___('ChangeType'));
//        $grid->column('currencyType', ___('CurrencyType'));
//        $grid->column('err', ___('Err'));
        $grid->column('money', ___('Money'));
//        $grid->column('param', ___('Param'));
//        $grid->column('state', ___('State'));
        $grid->column('time', ___('Time'))->display(function () {
            return date('Y-m-d H:i:s', $this->time / 1000);
        });

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
        $show = new Show(changeMoneyLog::findOrFail($id));

        $show->field('uuid', ___('Uuid'));
        $show->field('accountId', ___('AccountId'));
        $show->field('changeType', ___('ChangeType'));
        $show->field('currencyType', ___('CurrencyType'));
        $show->field('err', ___('Err'));
        $show->field('money', ___('Money'));
        $show->field('param', ___('Param'));
        $show->field('state', ___('State'));
        $show->field('time', ___('Time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new changeMoneyLog());

        $form->text('uuid', ___('Uuid'));
        $form->number('accountId', ___('AccountId'));
        $form->number('changeType', ___('ChangeType'));
        $form->number('currencyType', ___('CurrencyType'));
        $form->text('err', ___('Err'));
        $form->number('money', ___('Money'));
        $form->text('param', ___('Param'));
        $form->number('state', ___('State'));
        $form->number('time', ___('Time'));

        return $form;
    }
}
