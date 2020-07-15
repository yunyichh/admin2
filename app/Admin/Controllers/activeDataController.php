<?php

namespace App\Admin\Controllers;

use App\activeData;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class activeDataController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\activeData';

    function __construct()
    {
        $this->title = _i('活动数据');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new activeData());
        $grid->filter(function($filter){
           $filter->disableIdFilter();
           $filter->like('time',___('Time'))->date("Y-m-d H:i:s");
        });
        $grid->column('id', ___('Id'));
        $grid->column('time', ___('Time'));
        $grid->column('recharge', ___('Recharge'));
        $grid->column('withdraw', ___('Withdraw'));
        $grid->column('rechargeSusidy', ___('RechargeSusidy'));
        $grid->column('firstRechargeSusidy', ___('FirstRechargeSusidy'));
        $grid->column('commisionIssued', ___('CommisionIssued'));
        $grid->column('commisionExtract', ___('CommisionExtract'));
        $grid->column('reliefFund', ___('ReliefFund'));
        $grid->column('betOn', ___('BetOn'));
        $grid->column('sendPrize', ___('SendPrize'));
        $grid->column('inventory', ___('Inventory'));
        $grid->column('bindGold', ___('BindGold'));
        $grid->column('unBindGold', ___('UnBindGold'));

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
        $show = new Show(activeData::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('time', ___('Time'));
        $show->field('recharge', ___('Recharge'));
        $show->field('withdraw', ___('Withdraw'));
        $show->field('rechargeSusidy', ___('RechargeSusidy'));
        $show->field('firstRechargeSusidy', ___('FirstRechargeSusidy'));
        $show->field('commisionIssued', ___('CommisionIssued'));
        $show->field('commisionExtract', ___('CommisionExtract'));
        $show->field('reliefFund', ___('ReliefFund'));
        $show->field('betOn', ___('BetOn'));
        $show->field('sendPrize', ___('SendPrize'));
        $show->field('inventory', ___('Inventory'));
        $show->field('bindGold', ___('BindGold'));
        $show->field('unBindGold', ___('UnBindGold'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new activeData());

        $form->datetime('time', ___('Time'))->default(date('Y-m-d H:i:s'));
        $form->text('recharge', ___('Recharge'));
        $form->text('withdraw', ___('Withdraw'));
        $form->text('rechargeSusidy', ___('RechargeSusidy'));
        $form->text('firstRechargeSusidy', ___('FirstRechargeSusidy'));
        $form->text('commisionIssued', ___('CommisionIssued'));
        $form->text('commisionExtract', ___('CommisionExtract'));
        $form->text('reliefFund', ___('ReliefFund'));
        $form->text('betOn', ___('BetOn'));
        $form->text('sendPrize', ___('SendPrize'));
        $form->text('inventory', ___('Inventory'));
        $form->text('bindGold', ___('BindGold'));
        $form->text('unBindGold', ___('UnBindGold'));

        return $form;
    }
}
