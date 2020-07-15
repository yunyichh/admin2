<?php

namespace App\Admin\Controllers;

use App\promoteDetail;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class promoteDetailController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\promoteDetail';

    function __construct()
    {
        $this->title = _i("ÍÆ¹ãÃ÷Ï¸");
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new promoteDetail());

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountName', ___('AccountName'));
            $filter->like('vipGrade', ___('vipGrade'));
        });
        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('vipGrade', ___('VipGrade'));
        $grid->column('totalCommission', ___('TotalCommission'));
        $grid->column('commissionReceived', ___('CommissionReceived'));
        $grid->column('commissionPayable', ___('CommissionPayable'));
        $grid->column('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $grid->column('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $grid->column('superiorId', ___('SuperiorId'));
        $grid->column('directlyNum', ___('DirectlyNum'));
        $grid->column('teamNum', ___('TeamNum'));
        $grid->column('registerTime', ___('RegisterTime'));
//        $grid->column('updated_at', ___('Updated at'));
//        $grid->column('created_at', ___('Created at'));

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
        $show = new Show(promoteDetail::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('vipGrade', ___('VipGrade'));
        $show->field('totalCommission', ___('TotalCommission'));
        $show->field('commissionReceived', ___('CommissionReceived'));
        $show->field('commissionPayable', ___('CommissionPayable'));
        $show->field('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $show->field('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $show->field('superiorId', ___('SuperiorId'));
        $show->field('directlyNum', ___('DirectlyNum'));
        $show->field('teamNum', ___('TeamNum'));
        $show->field('registerTime', ___('RegisterTime'));
        $show->field('updated_at', ___('Updated at'));
        $show->field('created_at', ___('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new promoteDetail());

        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->text('vipGrade', ___('VipGrade'));
        $form->text('totalCommission', ___('TotalCommission'));
        $form->text('commissionReceived', ___('CommissionReceived'));
        $form->text('commissionPayable', ___('CommissionPayable'));
        $form->text('personalPerformanceWeek', ___('PersonalPerformanceWeek'));
        $form->text('teamPerformanceWeek', ___('TeamPerformanceWeek'));
        $form->text('superiorId', ___('SuperiorId'));
        $form->text('directlyNum', ___('DirectlyNum'));
        $form->text('teamNum', ___('TeamNum'));
        $form->datetime('registerTime', ___('RegisterTime'));

        return $form;
    }
}
