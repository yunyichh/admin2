<?php

namespace App\Admin\Controllers;

use App\winLoseRankList;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class winLoseRankListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\winLoseRankList';

    function __construct()
    {
        $this->title = _i('ÊäÓ®ÅÅÐÐ°ñ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new winLoseRankList());

        $grid->column('id', ___('Id'));
        $grid->column('ranking', ___('Ranking'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('gameId', ___('GameId'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('totalBet', ___('TotalBet'));
        $grid->column('totalWin', ___('TotalWin'));
        $grid->column('totalLose', ___('TotalLose'));
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
        $show = new Show(winLoseRankList::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('ranking', ___('Ranking'));
        $show->field('accountName', ___('AccountName'));
        $show->field('gameId', ___('GameId'));
        $show->field('nickName', ___('NickName'));
        $show->field('totalBet', ___('TotalBet'));
        $show->field('totalWin', ___('TotalWin'));
        $show->field('totalLose', ___('TotalLose'));
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
        $form = new Form(new winLoseRankList());

        $form->text('ranking', ___('Ranking'));
        $form->text('accountName', ___('AccountName'));
        $form->text('gameId', ___('GameId'));
        $form->text('nickName', ___('NickName'));
        $form->text('totalBet', ___('TotalBet'));
        $form->text('totalWin', ___('TotalWin'));
        $form->text('totalLose', ___('TotalLose'));

        return $form;
    }
}
