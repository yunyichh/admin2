<?php

namespace App\Admin\Controllers;

use App\inventoryConfigurationInventory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class inventoryConfigurationInventoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\inventoryConfigurationInventory';

    function __construct()
    {
        $this->title = _i('Ò»¼üÅäÖÃ¿â´æ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new inventoryConfigurationInventory());

        $grid->column('id', ___('Id'));
        $grid->column('serverId', ___('ServerId'));
        $grid->column('serverName', ___('ServerName'));
        $grid->column('inventoryDecayRate', ___('InventoryDecayRate'));
        $grid->column('smallStock', ___('SmallStock'));
        $grid->column('mediumStock', ___('MediumStock'));
        $grid->column('largeStock', ___('LargeStock'));
        $grid->column('extraLargeStock', ___('ExtraLargeStock'));
        $grid->column('small', ___('Small'));
        $grid->column('medium', ___('Medium'));
        $grid->column('large', ___('Large'));
        $grid->column('extraLarge', ___('ExtraLarge'));

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
        $show = new Show(inventoryConfigurationInventory::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('serverName', ___('ServerName'));
        $show->field('inventoryDecayRate', ___('InventoryDecayRate'));
        $show->field('smallStock', ___('SmallStock'));
        $show->field('mediumStock', ___('MediumStock'));
        $show->field('largeStock', ___('LargeStock'));
        $show->field('extraLargeStock', ___('ExtraLargeStock'));
        $show->field('small', ___('Small'));
        $show->field('medium', ___('Medium'));
        $show->field('large', ___('Large'));
        $show->field('extraLarge', ___('ExtraLarge'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new inventoryConfigurationInventory());

        $form->text('serverId', ___('ServerId'));
        $form->text('serverName', ___('ServerName'));
        $form->number('inventoryDecayRate', ___('InventoryDecayRate'));
        $form->text('smallStock', ___('SmallStock'));
        $form->text('mediumStock', ___('MediumStock'));
        $form->text('largeStock', ___('LargeStock'));
        $form->text('extraLargeStock', ___('ExtraLargeStock'));
        $form->text('small', ___('Small'));
        $form->text('medium', ___('Medium'));
        $form->text('large', ___('Large'));
        $form->text('extraLarge', ___('ExtraLarge'));

        return $form;
    }
}
