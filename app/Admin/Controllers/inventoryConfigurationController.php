<?php

namespace App\Admin\Controllers;

use App\inventoryConfiguration;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class inventoryConfigurationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\inventoryConfiguration';

    function __construct()
    {
        $this->title = _i('�������');
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new inventoryConfiguration());

        $data['refresh'] = _i('ˢ������');
        $data['conf_step'] = _i('һ�����ý׶�');
        $data['conf_jackpot'] = _i('һ�����ý���');
        $data['conf_inventory'] = _i('һ�����ÿ��');
        $data['conf_inventory2'] = _i('һ�����ÿ��2');

        $data['refresh_href'] = url()->current();
        $data['conf_step_href'] = url('admin/inventory-configuration-steps');
        $data['conf_jackpot_href'] = url('admin/inventory-configuration-jackpots');
        $data['conf_inventory_href'] = url('admin/inventory-configuration-invs');
        $data['conf_inventory2_href'] =  url('admin/inventory-configuration-invs');

        $grid->header(function ($query) use ($data) {
            return view('admin.inventory', $data);
        });
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('serverName', ___('ServerName'));
        });
        $grid->column('id', ___('Id'));
        $grid->column('serverId', ___('ServerId'));
        $grid->column('serverName', ___('ServerName'));
        $grid->column('inventoryAttenuation', ___('InventoryAttenuation'));
        $grid->column('smallStock', ___('SmallStock'));
        $grid->column('mediumStock', ___('MediumStock'));
        $grid->column('largeStock', ___('LargeStock'));
        $grid->column('extraLargeStock', ___('ExtraLargeStock'));
        $grid->column('adjustFundAmount', ___('AdjustFundAmount'));
        $grid->column('recoveryToday', ___('RecoveryToday'));
        $grid->column('revenueToday', ___('RevenueToday'));

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
        $show = new Show(inventoryConfiguration::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('serverName', ___('ServerName'));
        $show->field('inventoryAttenuation', ___('InventoryAttenuation'));
        $show->field('smallStock', ___('SmallStock'));
        $show->field('mediumStock', ___('MediumStock'));
        $show->field('largeStock', ___('LargeStock'));
        $show->field('extraLargeStock', ___('ExtraLargeStock'));
        $show->field('adjustFundAmount', ___('AdjustFundAmount'));
        $show->field('recoveryToday', ___('RecoveryToday'));
        $show->field('revenueToday', ___('RevenueToday'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new inventoryConfiguration());

        $form->text('serverId', ___('ServerId'));
        $form->text('serverName', ___('ServerName'));
        $form->text('inventoryAttenuation', ___('InventoryAttenuation'));
        $form->text('smallStock', ___('SmallStock'));
        $form->text('mediumStock', ___('MediumStock'));
        $form->text('largeStock', ___('LargeStock'));
        $form->text('extraLargeStock', ___('ExtraLargeStock'));
        $form->text('adjustFundAmount', ___('AdjustFundAmount'));
        $form->text('recoveryToday', ___('RecoveryToday'));
        $form->text('revenueToday', ___('RevenueToday'));

        return $form;
    }
}
