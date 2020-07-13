<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SiteController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '站长管理';

    public function __construct()
    {
        $this->title = _i('站长管理');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());
        $grid->model()->where('type', '=', '1');
        $grid->column('id', 'ID');
        $grid->column('name', '站长名称');
        $grid->column('money', '总余额');
        $grid->column('day_money', '日余额');
        $grid->column('week_money', '周余额');
        $grid->column('month_money', '月余额');
        $grid->column('x_money', '下线余额');
        $grid->column('deduction', '扣量');
        $grid->column('status', '状态');
        $grid->column('group_id', '用户分组');
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('type', __('Type'));
        $show->field('money', __('Money'));
        $show->field('day_money', __('Day money'));
        $show->field('week_money', __('Week money'));
        $show->field('month_money', __('Month money'));
        $show->field('x_money', __('X money'));
        $show->field('deduction', __('Deduction'));
        $show->field('status', __('Status'));
        $show->field('group_id', __('Group id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new User());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));
        $form->number('type', __('Type'));
        $form->decimal('money', __('Money'))->default(0.0000);
        $form->decimal('day_money', __('Day money'));
        $form->decimal('week_money', __('Week money'));
        $form->decimal('month_money', __('Month money'));
        $form->decimal('x_money', __('X money'));
        $form->text('deduction', __('Deduction'));
        $form->switch('status', __('Status'));
        $form->number('group_id', __('Group id'));

        return $form;
    }
}
