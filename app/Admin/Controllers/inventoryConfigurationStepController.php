<?php

namespace App\Admin\Controllers;

use App\inventoryConfigurationStep;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class inventoryConfigurationStepController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\inventoryConfigurationStep';

    function __construct()
    {
        $this->title = _i('Ò»¼üÅäÖÃ½×¶Î');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new inventoryConfigurationStep());


        $grid->column('serverId', ___('ServerId'))->editable();
        $grid->column('stockId', ___('StockId'))->editable();
        $grid->column('stockDesc', ___('StockDesc'))->editable();
        $grid->column('difficultId', ___('DifficultId'))->editable();
        $grid->column('difficultDesc', ___('DifficultDesc'))->editable();
        $grid->column('stockScore', ___('StockScore'))->editable();
        $grid->column('jump', ___('Jump'))->editable();

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
        $show = new Show(inventoryConfigurationStep::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('stockId', ___('StockId'));
        $show->field('stockDesc', ___('StockDesc'));
        $show->field('difficultId', ___('DifficultId'));
        $show->field('difficultDesc', ___('DifficultDesc'));
        $show->field('stockScore', ___('StockScore'));
        $show->field('jump', ___('Jump'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new inventoryConfigurationStep());

        $form->text('serverId', ___('ServerId'));
        $form->text('stockId', ___('StockId'));
        $form->text('stockDesc', ___('StockDesc'));
        $form->text('difficultId', ___('DifficultId'));
        $form->text('difficultDesc', ___('DifficultDesc'));
        $form->number('stockScore', ___('StockScore'));
        $form->number('jump', ___('Jump'));

        return $form;
    }
}
