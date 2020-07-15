<?php

namespace App\Admin\Controllers;

use App\emailManagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class emailManagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\emailManagement';

    function __construct()
    {
        $this->title = _i('ÓÊ¼þ¹ÜÀí');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new emailManagement());

        $grid->column('id', ___('Id'));
        $grid->column('serialization', ___('serialization'));
        $grid->column('emailPublishPlatform', ___('EmailPublishPlatform'));
        $grid->column('receiver', ___('Receiver'));
        $grid->column('title', ___('Title'));
        $grid->column('content', ___('Content'));
        $grid->column('type', ___('Type'));
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
        $show = new Show(emailManagement::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serialization', ___('serialization'));
        $show->field('emailPublishPlatform', ___('EmailPublishPlatform'));
        $show->field('receiver', ___('Receiver'));
        $show->field('title', ___('Title'));
        $show->field('content', ___('Content'));
        $show->field('type', ___('Type'));
        $show->field('uploadImg', ___('UploadImg'));
        $show->field('inputContent', ___('InputContent'));
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
        $form = new Form(new emailManagement());
        $form->text('serialization', ___('serialization'));
        $form->select('emailPublishPlatform', ___('EmailPublishPlatform'))->options([
            1 => 'H5',
            2 => 'APP'
        ]);
        $form->text('receiver', ___('Receiver'));
        $form->text('title', ___('Title'));
        $form->text('content', ___('Content'));
        $form->text('type', ___('Type'));
        $form->image('uploadImg', ___('UploadImg'));
        $form->text('inputContent', ___('InputContent'));

        return $form;
    }
}
