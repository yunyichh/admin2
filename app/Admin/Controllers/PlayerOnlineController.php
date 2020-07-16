<?php

namespace App\Admin\Controllers;

use App\PlayerOnline;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PlayerOnlineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\PlayerOnline';

    public function __construct()
    {
        $this->title = _i('在线会员');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PlayerOnline());
        $grid->disableCreateButton();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('gameId',___('GameId'));
            $filter->like('playId',___('PlayId'));
        });
//        $grid->column('id', ___('Id'));
        $grid->column('gameId', ___('GameId'));
        $grid->column('accountId', ___('AccountId'));
        $grid->column('starNO', ___('StarNO'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('regSource', ___('RegSource'));
        $grid->column('gameName', ___('GameName'));
        $grid->column('WLSocreToday', ___('WLSocreToday'));
        $grid->column('WLScore', ___('WLScore'));
        $grid->column('accountMoney', ___('AccountMoney'));
        $grid->column('loginTime', ___('LoginTime'));

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
        $show = new Show(PlayerOnline::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('gameId', ___('GameId'));
        $show->field('accountId', ___('AccountId'));
        $show->field('starNO', ___('StarNO'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('regSource', ___('RegSource'));
        $show->field('gameName', ___('GameName'));
        $show->field('WLSocreToday', ___('WLSocreToday'));
        $show->field('WLScore', ___('WLScore'));
        $show->field('accountMoney', ___('AccountMoney'));
        $show->field('loginTime', ___('LoginTime'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PlayerOnline());

        $form->number('gameId', ___('GameId'));
        $form->text('accountId', ___('AccountId'));
        $form->text('starNO', ___('StarNO'));
        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->text('regSource', ___('RegSource'));
        $form->text('gameName', ___('GameName'));
        $form->number('WLSocreToday', ___('WLSocreToday'));
        $form->number('WLScore', ___('WLScore'));
        $form->number('accountMoney', ___('AccountMoney'));
        $form->text('loginTime', ___('LoginTime'));

        return $form;
    }
}
