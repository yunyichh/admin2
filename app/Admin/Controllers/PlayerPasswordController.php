<?php

namespace App\Admin\Controllers;

use App\PlayerPassword;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PlayerPasswordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\PlayerPassword';

    public function __construct()
    {
        $this->title = _i('»áÔ±ÃÜÂë²éÑ¯');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PlayerPassword());
        $grid->disableCreateButton();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('accountId', ___('accountId'));
            $filter->like('gameId', ___('gameId'));
        });
//        $grid->column('id', ___('Id'));
        $grid->column('accountId', ___('AccountId'));
        $grid->column('starNO', ___('StarNO'));
        $grid->column('gameId', ___('GameId'));
        $grid->column('password', ___('Password'));

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
        $show = new Show(PlayerPassword::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('starNO', ___('StarNO'));
        $show->field('gameId', ___('GameId'));
        $show->field('password', ___('Password'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PlayerPassword());

        $form->text('accountId', ___('AccountId'));
        $form->text('starNO', ___('StarNO'));
        $form->text('gameId', ___('GameId'));
        $form->password('password', ___('Password'));

        return $form;
    }
}
