<?php

namespace App\Admin\Controllers;

use App\userWhitelistWithdraw;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class userWhitelistWithdrawController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\userWhitelistWithdraw';

    function __construct()
    {
        $this->title = _i('提现白名单');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new userWhitelistWithdraw());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountName', ___('accountName'));
        });
        $grid->header(function () {
            return view('admin.userWhiteWithdraw', ['shold_url' => '','text_lable'=>_i('非白名单用户审核阈值'),'text_submit'=>_i('提交')]);
        });

        $grid->column('id', ___('Id'));
        $grid->column('accountId', ___('AccountId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('thresholdValue', ___('ThresholdValue'));

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
        $show = new Show(userWhitelistWithdraw::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('thresholdValue', ___('ThresholdValue'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new userWhitelistWithdraw());

        $form->text('accountId', ___('AccountId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('thresholdValue', ___('ThresholdValue'));

        return $form;
    }
}
