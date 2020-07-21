<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\gameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class gameLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\gameLog';

    protected function title()
    {
        return _i('会员游戏记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new gameLog());

        $grid->column('onlyId', ___('OnlyId'));
        $grid->column('bigBlindIndex', ___('BigBlindIndex'));
        $grid->column('gameNums', ___('GameNums'));
        $grid->column('smallBlindIndex', ___('SmallBlindIndex'));
        $grid->column('tableCards', ___('TableCards'));
        $grid->column('tableId', ___('TableId'));
        $grid->column('tableSeat1Str1', ___('TableSeat1Str1'));
        $grid->column('tableSeat1Str2', ___('TableSeat1Str2'));
        $grid->column('tableSeat1Str3', ___('TableSeat1Str3'));
        $grid->column('tableSeat1Str4', ___('TableSeat1Str4'));
        $grid->column('tableSeat1Str5', ___('TableSeat1Str5'));
        $grid->column('tableSeat1Str6', ___('TableSeat1Str6'));
        $grid->column('tableSeat1Str7', ___('TableSeat1Str7'));
        $grid->column('time', ___('Time'));

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

        $show->field('onlyId', ___('OnlyId'));
        $show->field('bigBlindIndex', ___('BigBlindIndex'));
        $show->field('gameNums', ___('GameNums'));
        $show->field('smallBlindIndex', ___('SmallBlindIndex'));
        $show->field('tableCards', ___('TableCards'));
        $show->field('tableId', ___('TableId'));
        $show->field('tableSeat1Str1', ___('TableSeat1Str1'));
        $show->field('tableSeat1Str2', ___('TableSeat1Str2'));
        $show->field('tableSeat1Str3', ___('TableSeat1Str3'));
        $show->field('tableSeat1Str4', ___('TableSeat1Str4'));
        $show->field('tableSeat1Str5', ___('TableSeat1Str5'));
        $show->field('tableSeat1Str6', ___('TableSeat1Str6'));
        $show->field('tableSeat1Str7', ___('TableSeat1Str7'));
        $show->field('time', ___('Time'));

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

        $form->text('onlyId', ___('OnlyId'));
        $form->number('bigBlindIndex', ___('BigBlindIndex'));
        $form->number('gameNums', ___('GameNums'));
        $form->number('smallBlindIndex', ___('SmallBlindIndex'));
        $form->textarea('tableCards', ___('TableCards'));
        $form->number('tableId', ___('TableId'));
        $form->textarea('tableSeat1Str1', ___('TableSeat1Str1'));
        $form->textarea('tableSeat1Str2', ___('TableSeat1Str2'));
        $form->textarea('tableSeat1Str3', ___('TableSeat1Str3'));
        $form->textarea('tableSeat1Str4', ___('TableSeat1Str4'));
        $form->textarea('tableSeat1Str5', ___('TableSeat1Str5'));
        $form->textarea('tableSeat1Str6', ___('TableSeat1Str6'));
        $form->textarea('tableSeat1Str7', ___('TableSeat1Str7'));
        $form->number('time', ___('Time'));

        return $form;
    }
}
