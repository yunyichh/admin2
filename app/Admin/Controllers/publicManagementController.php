<?php

namespace App\Admin\Controllers;

use App\publicManagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class publicManagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\publicManagement';

    function __construct()
    {
        $this->title = _i('大厅公共管理');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new publicManagement());

        $grid->column('id', ___('Id'));
        $grid->column('title', ___('Title'));
        $grid->column('content', ___('Content'));
        $grid->column('publicPlatform', ___('PublicPlatform'));
        $grid->column('startTime', ___('StartTime'));
        $grid->column('endTime', ___('EndTime'));
        $grid->column('intervalTime', ___('IntervalTime'));
        $grid->column('publicType', ___('PublicType'));
        $grid->column('optimizePriority', ___('OptimizePriority'));
        $grid->column('uploadImg', ___('UploadImg'));
        $grid->column('inputContent', ___('InputContent'));

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
        $show = new Show(publicManagement::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('title', ___('Title'));
        $show->field('content', ___('Content'));
        $show->field('publicPlatform', ___('PublicPlatform'));
        $show->field('startTime', ___('StartTime'));
        $show->field('endTime', ___('EndTime'));
        $show->field('intervalTime', ___('IntervalTime'));
        $show->field('publicType', ___('PublicType'));
        $show->field('optimizePriority', ___('OptimizePriority'));
        $show->field('uploadImg', ___('UploadImg'));
        $show->field('inputContent', ___('InputContent'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new publicManagement());

        $form->text('title', ___('Title'));
        $form->text('content', ___('Content'));
        $form->text('publicPlatform', ___('PublicPlatform'));
        $form->datetime('startTime', ___('StartTime'))->default(date('Y-m-d H:i:s'));
        $form->datetime('endTime', ___('EndTime'))->default(date('Y-m-d H:i:s'));
        $form->number('intervalTime', ___('IntervalTime'));
        $form->text('publicType', ___('PublicType'));
        $form->text('optimizePriority', ___('OptimizePriority'));
        $form->text('uploadImg', ___('UploadImg'));
        $form->text('inputContent', ___('InputContent'));

        return $form;
    }
}
