<?php

namespace App\Admin\Controllers;

use App\GameLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GameLogConroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'game log';

    public function __construct()
    {
        $this->title = _i('ÓÎÏ·¼ÇÂ¼');
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GameLog());
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('gameId',___('GameId'));
            $filter->like('playId',___('PlayId'));
        });
//        $grid->expandFilter();
        if (!empty(@$_GET['starNO']))
            $grid->model()->where('playId', $_GET['starNO']);
        $grid->column('playId', ___('PlayId'));
//        $grid->column('logId', ___('LogId'));
        $grid->column('gameId', ___('GameId'));
        $grid->column('multiple', ___('Multiple'));

        $grid->column('time', ___('Time'));
        $grid->column('type', ___('Type'));
        $grid->column('winOrlose', ___('WinOrlose'));

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
        $show = new Show(GameLog::findOrFail($id));

        $show->field('logId', ___('LogId'));
        $show->field('gameId', ___('GameId'));
        $show->field('multiple', ___('Multiple'));
        $show->field('playId', ___('PlayId'));
        $show->field('time', ___('Time'));
        $show->field('type', ___('Type'));
        $show->field('winOrlose', ___('WinOrlose'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GameLog());

        $form->number('logId', ___('LogId'));
        $form->number('gameId', ___('GameId'));
        $form->text('multiple', ___('Multiple'));
        $form->text('playId', ___('PlayId'));
        $form->datetime('time', ___('Time'))->default(date('Y-m-d H:i:s'));
        $form->text('type', ___('Type'));
        $form->number('winOrlose', ___('WinOrlose'));

        return $form;
    }
}
