<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdvertiserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '广告商管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());
        $grid->model()->where('type','=','2');
        $grid->column('id', 'ID');
        $grid->column('name', '广告商名称');
        $grid->column('qq', 'QQ');
        $grid->column('tel', '联系人');
        $grid->column('mobile','电话');
        $grid->column('status', '状态');
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

        $show->field('id', 'ID');
        $show->field('name','广告商名称');
        $show->field('qq', 'QQ');
        $show->field('tel', '联系人');
        $show->field('mobile', '电话');
        $show->field('status','状态');

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
        $form->text('qq', 'QQ');
        $form->text('tel','联系人');
        $form->text('mobile','电话');
        $form->switch('status','状态');


        return $form;
    }
}
