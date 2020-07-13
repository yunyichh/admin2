<?php

namespace App\Admin\Controllers;

use App\VaultLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VaultLogConroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'vault log';

    public function __construct()
    {
        $this->title = _i('½ğ¿â');
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VaultLog());
        if (!empty(@$_GET['starNO']))
            $grid->model()->where('playId', $_GET['starNO']);
//        $grid->column('vaultId', ___('VaultId'));
        $grid->column('playId', ___('PlayId'));
        $grid->column('state', ___('State'));
        $grid->column('time', ___('Time'));
        $grid->column('carryMoney', ___('CarryMoney'));
        $grid->column('cornucopiaMoney', ___('CornucopiaMoney'));
        $grid->column('operateMoney', ___('OperateMoney'));
        $grid->column('vaultMoney', ___('VaultMoney'));

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
        $show = new Show(VaultLog::findOrFail($id));

        $show->field('vaultId', ___('VaultId'));
        $show->field('carryMoney', ___('CarryMoney'));
        $show->field('cornucopiaMoney', ___('CornucopiaMoney'));
        $show->field('operateMoney', ___('OperateMoney'));
        $show->field('playId', ___('PlayId'));
        $show->field('state', ___('State'));
        $show->field('time', ___('Time'));
        $show->field('vaultMoney', ___('VaultMoney'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VaultLog());

        $form->number('vaultId', ___('VaultId'));
        $form->number('carryMoney', ___('CarryMoney'));
        $form->number('cornucopiaMoney', ___('CornucopiaMoney'));
        $form->number('operateMoney', ___('OperateMoney'));
        $form->text('playId', ___('PlayId'));
        $form->number('state', ___('State'));
        $form->datetime('time', ___('Time'))->default(date('Y-m-d H:i:s'));
        $form->number('vaultMoney', ___('VaultMoney'));

        return $form;
    }
}
