<?php

namespace App\Admin\Controllers;

use App\controlPlayer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class controlPlayerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\controlPlayer';

    function __construct()
    {
        $this->title = _i('Íæ¼Òµã¿Ø');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new controlPlayer());

        $grid->column('id', ___('Id'));
        $grid->column('accountId', ___('AccountId'))->editable();
        $grid->column('nickName', ___('NickName'))->editable();
        $grid->column('winLoseValue', ___('WinLoseValue'))->editable();
        $grid->column('totalBet', ___('TotalBet'))->editable();
        $grid->column('totalWinLose', ___('TotalWinLose'))->editable();
        $grid->column('changeValue', ___('ChangeValue'))->editable();
        $grid->column('is_enable', ___('Is enable'))->switch();

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
        $show = new Show(controlPlayer::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('nickName', ___('NickName'));
        $show->field('winLoseValue', ___('WinLoseValue'));
        $show->field('totalBet', ___('TotalBet'));
        $show->field('totalWinLose', ___('TotalWinLose'));
        $show->field('changeValue', ___('ChangeValue'));
        $show->field('is_enable', ___('Is enable'));
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
        $form = new Form(new controlPlayer());

        $form->text('accountId', ___('AccountId'));
        $form->text('nickName', ___('NickName'));
        $form->number('winLoseValue', ___('WinLoseValue'));
        $form->number('totalBet', ___('TotalBet'));
        $form->number('totalWinLose', ___('TotalWinLose'));
        $form->number('changeValue', ___('ChangeValue'));
        $form->switch('is_enable', ___('Is enable'));

        return $form;
    }
}
