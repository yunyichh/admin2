<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Event\Add;
use App\eventManagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;
use App\Admin\Actions\Event\Add as eAdd;

class eventManagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\eventManagement';

    function __construct()
    {
        $this->title = _i('赛事管理');
        $page = @$_GET['page'];
        $per_page = @$_GET['per_page'];
        if (!empty($page) && !empty($per_page)) {
            $start = ($page - 1) * $per_page;
            $limit = $per_page;
        }

//        $params = [
//            'queryType' => 2,
//            'start' => (empty($start)) ? 0 : $start,
//            'length' => (empty($limit)) ? 20 : $limit,
//            'sortId' => 1,
//            'sort' => 1,
//            'null' => 'null',
//        ];

        $url = "http://192.168.1.23:8001/selectGame";
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);

        $result = json_decode($response->getBody(), true);

        if (!empty($result)) {
            DB::table('event_management')->truncate();
            DB::table('event_management')->insert($result);
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new eventManagement());
        $grid->disableCreateButton();
        $grid->actions(function($action){
           $action->disableEdit();
           $action->disableView();
           $action->disableDelete();
        });
        $grid->tools(function(Grid\Tools $tools){
            $tools->append(new eAdd());
        });
//        $grid->column('_id', ___(' id'));
        $grid->column('id', ___('Id'))->hide();
        $grid->column('apply_time', ___('Apply time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();
        $grid->column('end_time', ___('End time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) );
        })->sortable();
        $grid->column('game_id', ___('Game id'));
        $grid->column('apply_cost', ___('Apply cost'));
//        $grid->column('open_num', ___('Open num'));
//        $grid->column('differ_hour', ___('Differ hour'));
//        $grid->column('award', ___('Award'));
//        $grid->column('charge', ___('Charge'));

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
        $show = new Show(eventManagement::findOrFail($id));

        $show->field('_id', ___(' id'));
        $show->field('id', ___('Id'));
        $show->field('apply_time', ___('Apply time'));
        $show->field('end_time', ___('End time'));
        $show->field('game_id', ___('Game id'));
        $show->field('apply_cost', ___('Apply cost'));
        $show->field('open_num', ___('Open num'));
        $show->field('differ_hour', ___('Differ hour'));
        $show->field('award', ___('Award'));
        $show->field('charge', ___('Charge'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new eventManagement());

        $form->number('_id', ___(' id'));
        $form->datetime('apply_time', ___('Apply time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_time', ___('End time'))->default(date('Y-m-d H:i:s'));
        $form->number('game_id', ___('Game id'));
        $form->number('apply_cost', ___('Apply cost'));
        $form->number('open_num', ___('Open num'));
        $form->number('differ_hour', ___('Differ hour'));
        $form->text('award', ___('Award'));
        $form->number('charge', ___('Charge'));

        return $form;
    }
}
