<?php

namespace App\Admin\Controllers;

use App\difficultyConfiguration;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class difficultyConfigurationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\difficultyConfiguration';

    function __construct()
    {
        $this->title = _i('难度配置');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new difficultyConfiguration());
        $data['refresh'] = _i('刷新数据');
        $data['conf_step'] = _i('一键配置阶段');

        $data['refresh_href'] = url()->current();
        $data['conf_step_href'] = url('admin/difficulty-configuration-steps');

        $grid->header(function ($query) use ($data) {
            return view('admin.difficulty', $data);
        });
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('serverName',___('serverName'));
        });
        $grid->column('serverId', ___('ServerId'));
        $grid->column('serverName', ___('ServerName'));

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
        $show = new Show(difficultyConfiguration::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('serverName', ___('ServerName'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new difficultyConfiguration());

        $form->text('serverId', ___('ServerId'));
        $form->text('serverName', ___('ServerName'));

        return $form;
    }
}
