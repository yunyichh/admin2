<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Notice\Add;
use App\Admin\Actions\Notice\Delete;
use App\Admin\Actions\Notice\Edit;
use App\notice;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class noticeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\notice';

    public function title()
    {
        return _i('公告管理');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new notice());
        $grid->disableColumnSelector();
        $grid->disableExport();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->tools(function($tools){
            $tools->append(new Add());
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();
            $actions->add(new Edit());
            $actions->add(new Delete());
        });

        $grid->column('notice_id', ___('Notice id'));
        $grid->column('notice_type', ___('Notice type'))->display(function(){
            return @[0=>_i('登录公告'),1=>_i('游戏公告')][$this->notice_type];
        });
        $grid->column('level', ___('Level'));
        $grid->column('title', ___('Title2'));

        $grid->column('content', ___('Content2'))->display(function () {
            return substr(@$this->content, 0, 150) . ((strlen(@$this->content) > 300) ? '...' : '');
        });
        $grid->column('channel', ___('Channel'));
        $grid->column('start_time', ___('Start time'))->display(function () {
            if ($this->start_time>1000)
                return date('Y-m-d H:i:s', $this->start_time / 1000);
        });
        $grid->column('end_time', ___('End time2'))->display(function () {
            if ($this->end_time>1000)
                return date('Y-m-d H:i:s', $this->end_time / 1000);
        });
//        $grid->column('language', ___('Language'));
//        $grid->column('change_time', ___('Change time'));

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
        $show = new Show(notice::findOrFail($id));

        $show->field('notice_id', ___('Notice id'));
        $show->field('notice_type', ___('Notice type'));
        $show->field('level', ___('Level'));
        $show->field('start_time', ___('Start time'));
        $show->field('end_time', ___('End time'));
        $show->field('channel', ___('Channel'));
        $show->field('title', ___('Title'));
        $show->field('content', ___('Content'));
        $show->field('language', ___('Language'));
        $show->field('change_time', ___('Change time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new notice());

        $form->number('notice_id', ___('Notice id'));
        $form->number('notice_type', ___('Notice type'));
        $form->number('level', ___('Level'));
        $form->number('start_time', ___('Start time'));
        $form->number('end_time', ___('End time'));
        $form->text('channel', ___('Channel'));
        $form->text('title', ___('Title'));
        $form->text('content', ___('Content'));
        $form->number('language', ___('Language'));
        $form->number('change_time', ___('Change time'));

        return $form;
    }
}
