<?php

namespace App\Admin\Controllers;

use App\withdrawalCheck;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class withdrawalCheckController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\withdrawalCheck';

    function __construct()
    {
        $this->title = _i('ÌáÏÖ¶ÔÕË');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new withdrawalCheck());

        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('orderNo', ___('OrderNo'));
        $grid->column('withdrawAmount', ___('WithdrawAmount'));
        $grid->column('accountChannel', ___('AccountChannel'));
        $grid->column('withdrawChannel', ___('WithdrawChannel'));
        $grid->column('source', ___('Source'));
        $grid->column('applyTime', ___('ApplyTime'));
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
        $show = new Show(withdrawalCheck::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('orderNo', ___('OrderNo'));
        $show->field('withdrawAmount', ___('WithdrawAmount'));
        $show->field('accountChannel', ___('AccountChannel'));
        $show->field('withdrawChannel', ___('WithdrawChannel'));
        $show->field('source', ___('Source'));
        $show->field('applyTime', ___('ApplyTime'));
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
        $form = new Form(new withdrawalCheck());

        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->text('orderNo', ___('OrderNo'));
        $form->text('withdrawAmount', ___('WithdrawAmount'));
        $form->text('accountChannel', ___('AccountChannel'));
        $form->text('withdrawChannel', ___('WithdrawChannel'));
        $form->text('source', ___('Source'));
        $form->datetime('applyTime', ___('ApplyTime'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
