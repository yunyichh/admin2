<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\orderBuy;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class orderBuyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\orderBuy';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new orderBuy());

        $grid->column('orderId', __('OrderId'));
        $grid->column('bankCardNO', __('BankCardNO'));
        $grid->column('bankName', __('BankName'));
        $grid->column('bankSubName', __('BankSubName'));
        $grid->column('bankUser', __('BankUser'));
        $grid->column('channel', __('Channel'));
        $grid->column('createTime', __('CreateTime'));
        $grid->column('orderAccountId', __('OrderAccountId'));
        $grid->column('orderMoney', __('OrderMoney'));
        $grid->column('orderState', __('OrderState'));
        $grid->column('recommend', __('Recommend'));
        $grid->column('remarks', __('Remarks'));
        $grid->column('resultMsg', __('ResultMsg'));
        $grid->column('rmbMoney', __('RmbMoney'));
        $grid->column('starNO', __('StarNO'));
        $grid->column('transTime', __('TransTime'));

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
        $show = new Show(orderBuy::findOrFail($id));

        $show->field('orderId', __('OrderId'));
        $show->field('bankCardNO', __('BankCardNO'));
        $show->field('bankName', __('BankName'));
        $show->field('bankSubName', __('BankSubName'));
        $show->field('bankUser', __('BankUser'));
        $show->field('channel', __('Channel'));
        $show->field('createTime', __('CreateTime'));
        $show->field('orderAccountId', __('OrderAccountId'));
        $show->field('orderMoney', __('OrderMoney'));
        $show->field('orderState', __('OrderState'));
        $show->field('recommend', __('Recommend'));
        $show->field('remarks', __('Remarks'));
        $show->field('resultMsg', __('ResultMsg'));
        $show->field('rmbMoney', __('RmbMoney'));
        $show->field('starNO', __('StarNO'));
        $show->field('transTime', __('TransTime'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new orderBuy());

        $form->number('orderId', __('OrderId'));
        $form->text('bankCardNO', __('BankCardNO'));
        $form->text('bankName', __('BankName'));
        $form->text('bankSubName', __('BankSubName'));
        $form->text('bankUser', __('BankUser'));
        $form->number('channel', __('Channel'));
        $form->number('createTime', __('CreateTime'));
        $form->number('orderAccountId', __('OrderAccountId'));
        $form->number('orderMoney', __('OrderMoney'));
        $form->number('orderState', __('OrderState'));
        $form->number('recommend', __('Recommend'));
        $form->textarea('remarks', __('Remarks'));
        $form->text('resultMsg', __('ResultMsg'));
        $form->number('rmbMoney', __('RmbMoney'));
        $form->text('starNO', __('StarNO'));
        $form->number('transTime', __('TransTime'));

        return $form;
    }
}
