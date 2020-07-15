<?php

namespace App\Admin\Controllers;

use App\commissionGet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class commissionGetController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\commissionGet';

    function __construct()
    {
        $this->title = _i('佣金领取记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new commissionGet());

        $grid->column('id', ___('Id'));
        $grid->column('orderId', ___('OrderId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('turnOutCommission', ___('TurnOutCommission'));
        $grid->column('leftCommission', ___('LeftCommission'));
        $grid->column('status', ___('Status'));
        $grid->column('getTime', ___('GetTime'));
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
        $show = new Show(commissionGet::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('orderId', ___('OrderId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('turnOutCommission', ___('TurnOutCommission'));
        $show->field('leftCommission', ___('LeftCommission'));
        $show->field('status', ___('Status'));
        $show->field('getTime', ___('GetTime'));
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
        $form = new Form(new commissionGet());
        $form->text('orderId', ___('OrderId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->text('turnOutCommission', ___('TurnOutCommission'));
        $form->text('leftCommission', ___('LeftCommission'));
        $form->text('status', ___('Status'));
        $form->datetime('getTime', ___('GetTime'));

        return $form;
    }
}
