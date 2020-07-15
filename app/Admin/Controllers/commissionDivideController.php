<?php

namespace App\Admin\Controllers;

use App\commissionDivide;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class commissionDivideController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\commissionDivide';

    function __construct()
    {
        $this->title = _i('Ó¶½ğ·Ö³ÉÅäÖÃ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new commissionDivide());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('vipGrade', ___('VipGrade'));
        });
        $grid->column('id', ___('Id'));
        $grid->column('vipGrade', ___('VipGrade'));
        $grid->column('upperLimit', ___('UpperLimit'));
        $grid->column('lowerLimit', ___('LowerLimit'));
        $grid->column('rebate', ___('Rebate'));
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
        $show = new Show(commissionDivide::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('vipGrade', ___('VipGrade'));
        $show->field('upperLimit', ___('UpperLimit'));
        $show->field('lowerLimit', ___('LowerLimit'));
        $show->field('rebate', ___('Rebate'));
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
        $form = new Form(new commissionDivide());

        $form->text('vipGrade', ___('VipGrade'));
        $form->text('upperLimit', ___('UpperLimit'));
        $form->text('lowerLimit', ___('LowerLimit'));
        $form->text('rebate', ___('Rebate'));

        return $form;
    }
}
