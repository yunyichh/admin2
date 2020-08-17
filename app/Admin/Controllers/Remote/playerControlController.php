<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\playerControl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class playerControlController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\playerControl';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new playerControl());

        $grid->column('accountId', __('AccountId'));
        $grid->column('dzpkAward', __('DzpkAward'));
        $grid->column('dzpkAwardChance', __('DzpkAwardChance'));
        $grid->column('dzpkAwardTime', __('DzpkAwardTime'));
        $grid->column('dzpkTime', __('DzpkTime'));

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
        $show = new Show(playerControl::findOrFail($id));

        $show->field('accountId', __('AccountId'));
        $show->field('dzpkAward', __('DzpkAward'));
        $show->field('dzpkAwardChance', __('DzpkAwardChance'));
        $show->field('dzpkAwardTime', __('DzpkAwardTime'));
        $show->field('dzpkTime', __('DzpkTime'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new playerControl());

        $form->number('accountId', __('AccountId'));
        $form->number('dzpkAward', __('DzpkAward'));
        $form->number('dzpkAwardChance', __('DzpkAwardChance'));
        $form->number('dzpkAwardTime', __('DzpkAwardTime'));
        $form->number('dzpkTime', __('DzpkTime'));

        return $form;
    }
}
