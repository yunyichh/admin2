<?php

namespace App\Admin\Controllers;

use App\PlayerCheckGrade;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PlayerCheckGradeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\PlayerCheckGrade';

    public function __construct()
    {
        $this->title = _i('会员查分');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PlayerCheckGrade());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('gameId',___('GameId'));
            $filter->like('playId',___('PlayId'));
            $filter->between('gameTime',___('gameTime'))->datetime();
        });
//        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('accountId', ___('AccountId'));
        $grid->column('starNO', ___('StarNO'));
        $grid->column('gameTime', ___('GameTime'));
        $grid->column('jettonBeforeGame', ___('JettonBeforeGame'));
        $grid->column('jettonAfterGame', ___('JettonAfterGame'));
        $grid->column('amountOfPoints', ___('AmountOfPoints'));

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
        $show = new Show(PlayerCheckGrade::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('accountId', ___('AccountId'));
        $show->field('starNO', ___('StarNO'));
        $show->field('gameTime', ___('GameTime'));
        $show->field('jettonBeforeGame', ___('JettonBeforeGame'));
        $show->field('jettonAfterGame', ___('JettonAfterGame'));
        $show->field('amountOfPoints', ___('AmountOfPoints'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PlayerCheckGrade());

        $form->text('accountName', ___('AccountName'));
        $form->text('accountId', ___('AccountId'));
        $form->text('starNO', ___('StarNO'));
        $form->number('gameTime', ___('GameTime'));
        $form->decimal('jettonBeforeGame', ___('JettonBeforeGame'));
        $form->decimal('jettonAfterGame', ___('JettonAfterGame'));
        $form->decimal('amountOfPoints', ___('AmountOfPoints'));

        return $form;
    }
}
