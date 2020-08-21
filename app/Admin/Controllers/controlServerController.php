<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Server\stopServer;
use App\controlServer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class controlServerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\controlServer';

    function title()
    {
        return _i('服务器控制');
    }

    function __construct()
    {
        $url = getUrl('stop_data');
        logTxt($url);
        $result = json_decode(getHttpResponseGET($url), true);
        logTxt($result);
        if (isset($result['code']) && $result['code'] == 0) {
            $data = null;
            foreach ($result['res'] as $key => $value) {
                $_data = null;
                $_data['channel'] = $key;
                $_data['status'] = $value ? 'true' : 'false';
                if (!empty($_data))
                    $data[] = $_data;
            }
            DB::table('control_server')->truncate();
            DB::table('control_server')->insert($data);
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new controlServer());
        $grid->disableColumnSelector();
        $grid->disableExport();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->disableActions();
//        $grid->column('id', ___('Id'));
        $grid->column('channel', ___('Channel'));
        $grid->column('status', ___('Status'))->using([
            'true' => _i('已开启'),
            'false' => _i('已关闭')
        ])->dot([
            'true' => 'success',
            'false' => 'danger'
        ])->action(new stopServer());

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
        $show = new Show(controlServer::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('channel', ___('Channel'));
        $show->field('status', ___('Status'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new controlServer());

        $form->text('channel', ___('Channel'));
        $form->text('status', ___('Status'));

        return $form;
    }
}
