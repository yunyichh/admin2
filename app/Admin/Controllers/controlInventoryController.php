<?php

namespace App\Admin\Controllers;

use App\controlInventory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class controlInventoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\controlInventory';

    function __construct()
    {
        $this->title = _i('µã¿Ø¿â´æ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new controlInventory());

        $grid->column('id', ___('Id'));
        $grid->column('gameId', ___('GameId'))->editable();
        $grid->column('gameName', ___('GameName'))->editable();
        $grid->column('control_inventory', ___('Control inventory'))->editable();
        $grid->column('change_inventory', ___('Change inventory'))->editable();
//        $grid->column('updated_at', ___('Updated at'));
//        $grid->column('created_at', ___('Created at'));

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
        $show = new Show(controlInventory::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('gameId', ___('GameId'));
        $show->field('gameName', ___('GameName'));
        $show->field('control_inventory', ___('Control inventory'));
        $show->field('change_inventory', ___('Change inventory'));
        $show->field('updated_at', ___('Updated at'));
        $show->field('created_at', ___('Created at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new controlInventory());

        $form->text('gameId', ___('GameId'));
        $form->text('gameName', ___('GameName'));
        $form->text('control_inventory', ___('Control inventory'));
        $form->text('change_inventory', ___('Change inventory'));

        return $form;
    }
}
