<?php

namespace App\Admin\Controllers;

use App\goldConsumption;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class goldConsumptionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\goldConsumption';

    function __construct()
    {
        $this->title = _i('½ð±ÒÏûºÄ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new goldConsumption());

        $grid->column('id', ___('Id'));
        $grid->column('date', ___('Date'));
        $grid->column('gameName', ___('GameName'));
        $grid->column('betNumber', ___('BetNumber'));
        $grid->column('betGold', ___('BetGold'));
        $grid->column('obtainGold', ___('ObtainGold'));
        $grid->column('profitAmount', ___('ProfitAmount'));

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
        $show = new Show(goldConsumption::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('date', ___('Date'));
        $show->field('gameName', ___('GameName'));
        $show->field('betNumber', ___('BetNumber'));
        $show->field('betGold', ___('BetGold'));
        $show->field('obtainGold', ___('ObtainGold'));
        $show->field('profitAmount', ___('ProfitAmount'));
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
        $form = new Form(new goldConsumption());

        $form->datetime('date', ___('Date'))->default(date('Y-m-d H:i:s'));
        $form->text('gameName', ___('GameName'));
        $form->number('betNumber', ___('BetNumber'));
        $form->text('betGold', ___('BetGold'));
        $form->text('obtainGold', ___('ObtainGold'));
        $form->text('profitAmount', ___('ProfitAmount'));

        return $form;
    }
}
