<?php

namespace App\Admin\Controllers;

use App\userWhitelist;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class userWhitelistController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\userWhitelist';

    function __construct()
    {
        $this->title = _i('用户白名单');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new userWhitelist());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountName', ___('accountName'));
        });
        $grid->column('id', ___('Id'));
        $grid->column('accountId', ___('AccountId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));

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
        $show = new Show(userWhitelist::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new userWhitelist());

        $form->text('accountId', ___('AccountId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));

        return $form;
    }
}
