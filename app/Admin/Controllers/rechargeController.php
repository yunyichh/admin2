<?php

namespace App\Admin\Controllers;

use App\recharge;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class rechargeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\recharge';

    function __construct()
    {
        $this->title = _i('ºóÌ¨³äÖµ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new recharge());
        $grid->filter(function ($filter){
           $filter->disableIdFilter();
           $filter->like('gameId', ___('GameId'));
           $filter->like('accountName', ___('accountName'));
        });
        $grid->disableCreateButton();
        $grid->column('id', ___('Id'));
        $grid->column('gameId', ___('GameId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('rechargeNum', ___('RechargeNum'));
        $grid->column('created_at', ___('rechargeAt'));
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
        $show = new Show(recharge::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('gameId', ___('GameId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('rechargeNum', ___('RechargeNum'));
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
        $form = new Form(new recharge());

        $form->text('gameId', ___('GameId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('rechargeNum', ___('RechargeNum'));

        return $form;
    }
}
