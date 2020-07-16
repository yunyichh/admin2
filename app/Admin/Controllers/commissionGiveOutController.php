<?php

namespace App\Admin\Controllers;

use App\commissionGiveOut;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class commissionGiveOutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\commissionGiveOut';

    function __construct()
    {
        $this->title = _i('佣金发放记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new commissionGiveOut());
        $grid->disableCreateButton();
        $grid->filter(function ($filter) {
            $filter->disabledIdFilter();
            $filter->like('accountName', ___('AccountName'));
            $filter->like('time', ___('time'))->date();
            $filter->like('created_at', ___('createdAt'))->date();
        });

        $grid->column('id', ___('Id'));
        $grid->column('commissionId', ___('CommissionId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('vipGarde', ___('VipGarde'));
        $grid->column('getCommission', ___('GetCommission'));
        $grid->column('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $grid->column('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $grid->column('teamNum', ___('TeamNum'));
        $grid->column('time', ___('Time'));

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
        $show = new Show(commissionGiveOut::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('commissionId', ___('CommissionId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('vipGarde', ___('VipGarde'));
        $show->field('getCommission', ___('GetCommission'));
        $show->field('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $show->field('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $show->field('teamNum', ___('TeamNum'));
        $show->field('time', ___('Time'));
        $show->field('created_at', ___('Created at'));
        $show->field('updated_at', ___('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new commissionGiveOut());

        $form->text('commissionId', ___('CommissionId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->text('vipGarde', ___('VipGarde'));
        $form->text('getCommission', ___('GetCommission'));
        $form->text('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $form->text('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $form->number('teamNum', ___('TeamNum'));
        $form->datetime('time', ___('Time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
