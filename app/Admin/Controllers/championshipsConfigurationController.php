<?php

namespace App\Admin\Controllers;

use App\championshipsConfiguration;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class championshipsConfigurationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\championshipsConfiguration';

    function __construct()
    {
        $this->title = _i('½õ±êÈüÅäÖÃ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new championshipsConfiguration());

        $grid->column('id', ___('Id'));
        $grid->column('beginTime', ___('BeginTime'));
        $grid->column('endTime', ___('EndTime2'));
        $grid->column('gameRounds', ___('GameRounds'));
        $grid->column('distributionGold', ___('DistributionGold'));
        $grid->column('awardsNum', ___('AwardsNum'));
        $grid->column('playDetail', ___('PlayDetail'));
        $grid->column('eventDetail', ___('EventDetail'));
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
        $show = new Show(championshipsConfiguration::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('beginTime', ___('BeginTime'));
        $show->field('endTime', ___('EndTime2'));
        $show->field('gameRounds', ___('GameRounds'));
        $show->field('distributionGold', ___('DistributionGold'));
        $show->field('awardsNum', ___('AwardsNum'));
        $show->field('playDetail', ___('PlayDetail'));
        $show->field('eventDetail', ___('EventDetail'));
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
        $form = new Form(new championshipsConfiguration());

        $form->datetime('beginTime', ___('BeginTime'))->default(date('Y-m-d H:i:s'));
        $form->datetime('endTime', ___('EndTime2'))->default(date('Y-m-d H:i:s'));
        $form->text('gameRounds', ___('GameRounds'));
        $form->text('distributionGold', ___('DistributionGold'));
        $form->text('awardsNum', ___('AwardsNum'));
        $form->text('playDetail', ___('PlayDetail'));
        $form->text('eventDetail', ___('EventDetail'));

        return $form;
    }
}
