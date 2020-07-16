<?php

namespace App\Admin\Controllers;

use App\rechargeOnline;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class rechargeOnlineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\rechargeOnline';

    function __construct()
    {
        $this->title = _i('ÔÚÏß³äÖµ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new rechargeOnline());
        $grid->disableCreateButton();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountName', ___('AccountName'));
            $filter->like('orderNo', ___('OrderNo'));
            $filter->like('rechargeWay', ___('RechargeWay'));
            $filter->like('rechargeTime', ___('RechargeTime'));
            $filter->like('rechargeSource', ___('RechargeSource'));
            $filter->like('orderStatus', ___('OrderStatus'));
        });

        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('orderNo', ___('OrderNo'));
        $grid->column('rechargeAmount', ___('RechargeAmount'));
        $grid->column('rechargeWay', ___('RechargeWay'));
        $grid->column('rechargeTime', ___('RechargeTime'));
        $grid->column('rechargeSource', ___('RechargeSource'));
        $grid->column('rechargeStatus', ___('RechargeStatus'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('rechargeSubsidy', ___('RechargeSubsidy'));
        $grid->column('payWay', ___('PayWay'));
        $grid->column('orderStatus', ___('OrderStatus'));
        $grid->column('orderDesc', ___('OrderDesc'));
        $grid->column('orderTime', ___('OrderTime'));
        $grid->column('orderCompleteTime', ___('OrderCompleteTime'));

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
        $show = new Show(rechargeOnline::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('orderNo', ___('OrderNo'));
        $show->field('rechargeAmount', ___('RechargeAmount'));
        $show->field('rechargeWay', ___('RechargeWay'));
        $show->field('rechargeTime', ___('RechargeTime'));
        $show->field('rechargeSource', ___('RechargeSource'));
        $show->field('rechargeStatus', ___('RechargeStatus'));
        $show->field('nickName', ___('NickName'));
        $show->field('rechargeSubsidy', ___('RechargeSubsidy'));
        $show->field('payWay', ___('PayWay'));
        $show->field('orderStatus', ___('OrderStatus'));
        $show->field('orderDesc', ___('OrderDesc'));
        $show->field('orderTime', ___('OrderTime'));
        $show->field('orderCompleteTime', ___('OrderCompleteTime'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new rechargeOnline());

        $form->text('accountName', ___('AccountName'));
        $form->text('orderNo', ___('OrderNo'));
        $form->text('rechargeAmount', ___('RechargeAmount'));
        $form->text('rechargeWay', ___('RechargeWay'));
        $form->datetime('rechargeTime', ___('RechargeTime'));
        $form->text('rechargeSource', ___('RechargeSource'));
        $form->text('rechargeStatus', ___('RechargeStatus'));
        $form->text('nickName', ___('NickName'));
        $form->text('rechargeSubsidy', ___('RechargeSubsidy'));
        $form->text('payWay', ___('PayWay'));
        $form->text('orderStatus', ___('OrderStatus'));
        $form->text('orderDesc', ___('OrderDesc'));
        $form->datetime('orderTime', ___('OrderTime'))->default(date('Y-m-d H:i:s'));
        $form->datetime('orderCompleteTime', ___('OrderCompleteTime'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
