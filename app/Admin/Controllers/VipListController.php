<?php

namespace App\Admin\Controllers;

use App\VipList;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class VipListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\VipList';


    public function __construct()
    {

        $this->title = _i('VIP');

        $accountId = @$_GET['accountId'];
        $starNO = @$_GET['starNO'];
        if (!empty($starNO) && !empty($accountId)) {
            $client = new \GuzzleHttp\Client();
            $url = getValue('queryVip') . ' ' . implode(' ', [$accountId, null]);
            $response = $client->request('GET', $url);
            $result = $response->getBody();
            $result = json_decode($result, true);
            $data = null;
            if ($result['code'] == 0) {
                $data = $result['content'];
                $data['starNO'] = $starNO;
            } else {
                exit($response->getBody());
            }

            if (!empty($data)) {
                DB::table('vip_list')->truncate();
                DB::table('vip_list')->insert($data);
            }
        } else {
            exit(json_encode(['accountId' => $accountId, 'starNo' => $starNO]));
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new VipList());

        $grid->column('id', ___('Id'));
        $grid->column('starNO', ___('StarNO'));
        $grid->column('vip', ___('Vip'));
        $grid->column('vaildTime', ___('VaildTime'));
        $grid->column('kickUsedNum', ___('KickUsedNum'));

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
        $show = new Show(VipList::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('starNO', ___('StarNO'));
        $show->field('vip', ___('Vip'));
        $show->field('vaildTime', ___('VaildTime'));
        $show->field('kickUsedNum', ___('KickUsedNum'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new VipList());

        $form->text('starNO', ___('StarNO'));
        $form->text('vip', ___('Vip'));
        $form->text('vaildTime', ___('VaildTime'));
        $form->number('kickUsedNum', ___('KickUsedNum'));

        return $form;
    }
}
