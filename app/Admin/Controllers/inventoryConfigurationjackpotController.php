<?php

namespace App\Admin\Controllers;

use App\inventoryConfigurationJackpot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class inventoryConfigurationjackpotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\inventoryConfigurationJackpot';

    function __construct()
    {
        $this->title = _i('Ò»¼üÅäÖÃ½±³Ø');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new inventoryConfigurationJackpot());

        $grid->column('id', ___('Id'));
        $grid->column('serverId', ___('ServerId'));
        $grid->column('prizePoolGrowthRate', ___('PrizePoolGrowthRate'));
        $grid->column('smallJackpotScore', ___('SmallJackpotScore'));
        $grid->column('mediumJackpotScore', ___('MediumJackpotScore'));
        $grid->column('largeJackpotScore', ___('LargeJackpotScore'));
        $grid->column('smallestIncrease', ___('SmallestIncrease'));
        $grid->column('normalIncrease', ___('NormalIncrease'));
        $grid->column('maximumIncrease', ___('MaximumIncrease'));

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
        $show = new Show(inventoryConfigurationJackpot::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('prizePoolGrowthRate', ___('PrizePoolGrowthRate'));
        $show->field('smallJackpotScore', ___('SmallJackpotScore'));
        $show->field('mediumJackpotScore', ___('MediumJackpotScore'));
        $show->field('largeJackpotScore', ___('LargeJackpotScore'));
        $show->field('smallestIncrease', ___('SmallestIncrease'));
        $show->field('normalIncrease', ___('NormalIncrease'));
        $show->field('maximumIncrease', ___('MaximumIncrease'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new inventoryConfigurationJackpot());

        $form->text('serverId', ___('ServerId'));
        $form->number('prizePoolGrowthRate', ___('PrizePoolGrowthRate'));
        $form->number('smallJackpotScore', ___('SmallJackpotScore'));
        $form->number('mediumJackpotScore', ___('MediumJackpotScore'));
        $form->number('largeJackpotScore', ___('LargeJackpotScore'));
        $form->text('smallestIncrease', ___('SmallestIncrease'));
        $form->text('normalIncrease', ___('NormalIncrease'));
        $form->text('maximumIncrease', ___('MaximumIncrease'));

        return $form;
    }
}
