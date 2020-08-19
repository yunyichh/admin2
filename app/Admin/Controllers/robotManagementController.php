<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Robot\robotJoinNum;
use App\robotManagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Illuminate\Support\Facades\DB;
use App\Admin\Actions\Robot\robotAiType;

class robotManagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\robotManagement';

    function title()
    {
        return _i('机器人管理');
    }

    function __construct()
    {
        $url = getUrl('get_robot_data');
        logTxt($url);

        $result = getHttpResponseGET($url);
        if (@strpos($result, 404) !== false) {
            exit('请求接口失败');
        }
        $result = @json_decode($result, true);
        logTxt($result);
        if (isset($result['code']) && $result['code'] == 0) {
            DB::table('robot_management')->truncate();
            DB::table('robot_management')->updateOrInsert($result['res']);
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new robotManagement());

        $grid->disableCreateButton();
        $grid->disableColumnSelector();
//        $grid->disableActions();
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->add(new robotAiType());
            $actions->add(new robotJoinNum());
        });
        $grid->disableFilter();
        $grid->disableBatchActions();
        $grid->disablePagination();
//        $grid->column('id', ___('Id'));
        $grid->column('ming', ___('Ming'));
        $grid->column('an', ___('An'));
        $grid->column('ai_type', ___('Ai type'));
        $grid->column('join_num', ___('Join num'));
//        $grid->column('created_at', ___('Created at'));
//        $grid->column('updated_at', ___('Updated at'));

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
        $show = new Show(robotManagement::findOrFail($id));

//        $show->field('id', ___('Id'));
        $show->field('ming', ___('Ming'));
        $show->field('an', ___('An'));
        $show->field('ai_type', ___('Ai type'));
//        $show->field('join_num', ___('Join num'));
//        $show->field('created_at', ___('Created at'));
//        $show->field('updated_at', ___('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new robotManagement());

        $form->text('ming', ___('Ming'));
        $form->text('an', ___('An'));
        $form->text('ai_type', ___('Ai type'));
        $form->text('join_num', ___('Join num'));

        return $form;
    }
}
