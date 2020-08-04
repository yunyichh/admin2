<?php

namespace App\Admin\Controllers;

use App\eventManagementAwards;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class eventManagementAwardsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\eventManagementAwards';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new eventManagementAwards());

        $grid->column('id', __('Id'));
        $grid->column('startRank', __('StartRank'));
        $grid->column('endRank', __('EndRank'));
        $grid->column('desc', __('Desc'));
        $grid->column('awards', __('Awards'));

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
        $show = new Show(eventManagementAwards::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('startRank', __('StartRank'));
        $show->field('endRank', __('EndRank'));
        $show->field('desc', __('Desc'));
        $show->field('awards', __('Awards'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new eventManagementAwards());

        $form->number('startRank', __('StartRank'));
        $form->number('endRank', __('EndRank'));
        $form->text('desc', __('Desc'));
        $form->text('awards', __('Awards'));

        return $form;
    }
}
