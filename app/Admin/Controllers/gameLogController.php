<?php

namespace App\Admin\Controllers;

use App\Remote\gameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class gameLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\gameLog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new gameLog());

        $grid->column('onlyId', __('OnlyId'));
        $grid->column('bigBlindIndex', __('BigBlindIndex'));
        $grid->column('gameNums', __('GameNums'));
        $grid->column('smallBlindIndex', __('SmallBlindIndex'));
        $grid->column('tableCards', __('TableCards'));
        $grid->column('tableId', __('TableId'));
        $grid->column('tableSeat1Str1', __('TableSeat1Str1'));
        $grid->column('tableSeat1Str2', __('TableSeat1Str2'));
        $grid->column('tableSeat1Str3', __('TableSeat1Str3'));
        $grid->column('tableSeat1Str4', __('TableSeat1Str4'));
        $grid->column('tableSeat1Str5', __('TableSeat1Str5'));
        $grid->column('tableSeat1Str6', __('TableSeat1Str6'));
        $grid->column('tableSeat1Str7', __('TableSeat1Str7'));
        $grid->column('time', __('Time'));

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
        $show = new Show(gameLog::findOrFail($id));

        $show->field('onlyId', __('OnlyId'));
        $show->field('bigBlindIndex', __('BigBlindIndex'));
        $show->field('gameNums', __('GameNums'));
        $show->field('smallBlindIndex', __('SmallBlindIndex'));
        $show->field('tableCards', __('TableCards'));
        $show->field('tableId', __('TableId'));
        $show->field('tableSeat1Str1', __('TableSeat1Str1'));
        $show->field('tableSeat1Str2', __('TableSeat1Str2'));
        $show->field('tableSeat1Str3', __('TableSeat1Str3'));
        $show->field('tableSeat1Str4', __('TableSeat1Str4'));
        $show->field('tableSeat1Str5', __('TableSeat1Str5'));
        $show->field('tableSeat1Str6', __('TableSeat1Str6'));
        $show->field('tableSeat1Str7', __('TableSeat1Str7'));
        $show->field('time', __('Time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new gameLog());

        $form->text('onlyId', __('OnlyId'));
        $form->number('bigBlindIndex', __('BigBlindIndex'));
        $form->number('gameNums', __('GameNums'));
        $form->number('smallBlindIndex', __('SmallBlindIndex'));
        $form->textarea('tableCards', __('TableCards'));
        $form->number('tableId', __('TableId'));
        $form->textarea('tableSeat1Str1', __('TableSeat1Str1'));
        $form->textarea('tableSeat1Str2', __('TableSeat1Str2'));
        $form->textarea('tableSeat1Str3', __('TableSeat1Str3'));
        $form->textarea('tableSeat1Str4', __('TableSeat1Str4'));
        $form->textarea('tableSeat1Str5', __('TableSeat1Str5'));
        $form->textarea('tableSeat1Str6', __('TableSeat1Str6'));
        $form->textarea('tableSeat1Str7', __('TableSeat1Str7'));
        $form->number('time', __('Time'));

        return $form;
    }
}
