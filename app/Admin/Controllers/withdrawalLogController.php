<?php

namespace App\Admin\Controllers;

use App\withdrawalLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class withdrawalLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\withdrawalLog';

    function __construct()
    {
        $this->title = _i('ÌáÏÖ¼ÇÂ¼');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new withdrawalLog());

        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('orderNo', ___('OrderNo'));
        $grid->column('withdrawAmount', ___('WithdrawAmount'));
        $grid->column('levyProportion', ___('LevyProportion'));
        $grid->column('taxCredits', ___('TaxCredits'));
        $grid->column('tax', ___('Tax'));
        $grid->column('freeTaxWithdraw', ___('FreeTaxWithdraw'));
        $grid->column('freeTaxAfterWithdraw', ___('FreeTaxAfterWithdraw'));
        $grid->column('totalRecharge', ___('TotalRecharge'));
        $grid->column('totalWithdraw', ___('TotalWithdraw'));
        $grid->column('curWithdraw', ___('CurWithdraw'));
        $grid->column('accountChannel', ___('AccountChannel'));
        $grid->column('withdrawChannel', ___('WithdrawChannel'));
        $grid->column('source', ___('Source'));
        $grid->column('status', ___('Status'));
        $grid->column('applyTime', ___('ApplyTime'));
        $grid->column('completeTime', ___('CompleteTime'));
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
        $show = new Show(withdrawalLog::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('orderNo', ___('OrderNo'));
        $show->field('withdrawAmount', ___('WithdrawAmount'));
        $show->field('levyProportion', ___('LevyProportion'));
        $show->field('taxCredits', ___('TaxCredits'));
        $show->field('tax', ___('Tax'));
        $show->field('freeTaxWithdraw', ___('FreeTaxWithdraw'));
        $show->field('freeTaxAfterWithdraw', ___('FreeTaxAfterWithdraw'));
        $show->field('totalRecharge', ___('TotalRecharge'));
        $show->field('totalWithdraw', ___('TotalWithdraw'));
        $show->field('curWithdraw', ___('CurWithdraw'));
        $show->field('accountChannel', ___('AccountChannel'));
        $show->field('withdrawChannel', ___('WithdrawChannel'));
        $show->field('source', ___('Source'));
        $show->field('status', ___('Status'));
        $show->field('applyTime', ___('ApplyTime'));
        $show->field('completeTime', ___('CompleteTime'));
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
        $form = new Form(new withdrawalLog());

        $form->text('accountName', ___('AccountName'));
        $form->text('orderNo', ___('OrderNo'));
        $form->text('withdrawAmount', ___('WithdrawAmount'));
        $form->text('levyProportion', ___('LevyProportion'));
        $form->text('taxCredits', ___('TaxCredits'));
        $form->text('tax', ___('Tax'));
        $form->text('freeTaxWithdraw', ___('FreeTaxWithdraw'));
        $form->text('freeTaxAfterWithdraw', ___('FreeTaxAfterWithdraw'));
        $form->text('totalRecharge', ___('TotalRecharge'));
        $form->text('totalWithdraw', ___('TotalWithdraw'));
        $form->text('curWithdraw', ___('CurWithdraw'));
        $form->text('accountChannel', ___('AccountChannel'));
        $form->text('withdrawChannel', ___('WithdrawChannel'));
        $form->text('source', ___('Source'));
        $form->text('status', ___('Status'));
        $form->datetime('applyTime', ___('ApplyTime'));
        $form->datetime('completeTime', ___('CompleteTime'));

        return $form;
    }
}
