<?php

namespace App\Admin\Controllers;

use App\withdrawalApproval;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Withdrawal\Agree;
use App\Admin\Actions\Withdrawal\Refuse;
use Encore\Admin\Grid\Displayers\Actions;
class withdrawalApprovalController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\withdrawalApproval';

    function __construct()
    {
        $this->title = _i('ÌáÏÖÉóÅú');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new withdrawalApproval());

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountName', ___('AccountName'));
            $filter->like('orderNo', ___('OrderNo'));
            $filter->like('source', ___('Source'));
            $filter->like('applyTime', ___('applyTime'));
        });

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
            $actions->add(new Agree());
            $actions->add(new Refuse());
        });
//        $grid->setActionClass(Actions::class);

        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('orderNo', ___('OrderNo'));
        $grid->column('withdrawalAmount', ___('WithdrawalAmount'));
        $grid->column('accountChannel', ___('AccountChannel'));
        $grid->column('withdrawalChannel', ___('WithdrawalChannel'));
        $grid->column('source', ___('Source'));
        $grid->column('desc', ___('Desc'));
        $grid->column('applyTime', ___('applyTime'));
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
        $show = new Show(withdrawalApproval::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('orderNo', ___('OrderNo'));
        $show->field('withdrawalAmount', ___('WithdrawalAmount'));
        $show->field('accountChannel', ___('AccountChannel'));
        $show->field('withdrawalChannel', ___('WithdrawalChannel'));
        $show->field('source', ___('Source'));
        $show->field('desc', ___('Desc'));
        $show->field('applyTime', ___('applyTime'));
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
        $form = new Form(new withdrawalApproval());

        $form->text('accountName', ___('AccountName'));
        $form->text('orderNo', ___('OrderNo'));
        $form->text('withdrawalAmount', ___('WithdrawalAmount'));
        $form->text('accountChannel', ___('AccountChannel'));
        $form->text('withdrawalChannel', ___('WithdrawalChannel'));
        $form->text('source', ___('Source'));
        $form->text('desc', ___('Desc'));
        $form->datetime('applyTime', ___('applyTime'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
