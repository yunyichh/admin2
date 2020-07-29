<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\changeGoldRecord;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class changeGoldRecordController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\changeGoldRecord';

    //gm(1),                      //gm����
    //gm2(2)=>����̳��۶������δ���
    //gm3(3)=>�ֹ�����
    //bind_card(4)=>�󶨻��޸����п���Ϣ������
    //order(5)=>����
    //buy_auction_num(6)=>�����Ĵ���
    //buy_item(7)=>������Ʒ
    //gm4(8)=>GM��̨���ָ�����������֤��Ϣ����
    //gm5(9)=>GM�޸İ�ȫ��֤�ֻ��ŷ���
    //gm6(10)=>gm�ֹ�ת��ָ���ʺų���������
    //bank_self(11)=>��ⳬ��������������
    //modfiy_phone(12)=>�޸��ֻ�����֤���ŷ���
    //self_lock(13)=>����������ͨ
    //shiming(14)=>���ʵ������
    //account_change_money(15)=>���ӻ�����ʺŽ��
    //create_account(16)=>�����˺ų�ʼ���
    //game_cost(17)=>��Ϸ�����Ľ��
    //week_game(18)=>������������
    //platfrom_login(19)=>ƽ̨��¼��ʼ���
    //platfrom_up(20)=>ƽ̨�Ϸ�
    //platfrom_low(21)=>ƽ̨�·�
    //week_gamem_cost(22),        //��������
    //give(23)=>������ҽ���
    //sign(24)=>ǩ������
    //match(25)=>ƥ������

    protected $sourceTypes = [
        0 => '����',
        1 => 'gm����',
        2 => '����̳��۶������δ���',
        3 => '�ֹ�����',
        4 => '�󶨻��޸����п���Ϣ������',
        5 => '����',
        6 => '�����Ĵ���',
        7 => '������Ʒ',
        8 => 'GM��̨���ָ�����������֤��Ϣ����',
        9 => 'GM�޸İ�ȫ��֤�ֻ��ŷ���',
        10 => 'gm�ֹ�ת��ָ���ʺų���������',
        11 => '��ⳬ��������������',
        12 => '�޸��ֻ�����֤���ŷ���',
        13 => '����������ͨ',
        14 => '���ʵ������',
        15 => '���ӻ�����ʺŽ��',
        16 => '�����˺ų�ʼ���',
        17 => '��Ϸ�����Ľ��',
        18 => '������������',
        19 => 'ƽ̨��¼��ʼ���',
        20 => 'ƽ̨�Ϸ�',
        21 => 'ƽ̨�·�',
        22 => '��������',
        23 => '������ҽ���',
        24 => 'ǩ������',
        25 => 'ƥ������'
    ];

    protected function title()
    {
        return _i('��Ա��ұ仯'); // TODO: Change the autogenerated stub
        $page = @$_GET['page'];
        $per_page = @$_GET['per_page'];
        if (!empty($page) && !empty($per_page)) {
            $start = ($page - 1) * $per_page;
            $limit = $per_page;
        }
        $params = [
            'queryType' => 2,
            'start' => (empty($start)) ? 0 : $start,
            'length' => (empty($limit)) ? 20 : $limit,
            'sortId' => 1,
            'sort' => 1,
            'null' => 'null',
        ];
        $url = getValue('findAllUser');
        $url = $url . ' ' . implode(' ', array_values($params));

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);

        $result = json_decode($response->getBody(), true);
        $retList = null;
        if ($result['code'] == 0) {
            $retList = $result['content']['retList'];
        } else {
            exit($result);
        }
        dump($retList);
        exit();

        if (!empty($retList)) {
            DB::table('players')->truncate();
            DB::table('players')->insert($retList);
        }
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new changeGoldRecord());
        $grid->actions(function ($action) {
            $action->disableEdit();
            $action->disableView();
            $action->disableDelete();
        });
        $grid->filter(function ($filter) {
            $filter->like('accountId', ___('AccountId'));
            $filter->like('account.accountName', ___('accountName'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('time', '>', $time);
            }, ___('startTimes'))->datetime();
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000 ;
                $query->where('time', '<', $time);
            }, ___('endTimes'))->datetime();
        });


//        $grid->column('id', ___('Id'));

        $grid->model()->join('accountentity', 'accountentity.accountId', '=', 'changegoldrecordentity.accountId')->where('accountentity.robotFlag', 0);
        $grid->column('accountId', ___('AccountId'));
        $grid->column('accountName', ___('accountName'))->display(function () {
            $account = @$this->account['accountName'];
            return $account;
        });
        $grid->column('oldMoney', ___('OldMoney'));

        $grid->column('changeMoney', ___('ChangeMoney'));
        $grid->column('nowMoney', ___('NowMoney'));

        $_this = $this;
        $grid->column('sourceType', ___('changeReason'))->display(function() use($_this){
            return _i($_this->sourceTypes[$this->sourceType]);
        });
        $grid->column('time', ___('Time'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) );
        })->sortable();

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
        $show = new Show(changeGoldRecord::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('changeMoney', ___('ChangeMoney'));
        $show->field('nowMoney', ___('NowMoney'));
        $show->field('oldMoney', ___('OldMoney'));
        $show->field('source', ___('Source'));
        $show->field('time', ___('Time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new changeGoldRecord());

        $form->number('accountId', ___('AccountId'));
        $form->number('changeMoney', ___('ChangeMoney'));
        $form->number('nowMoney', ___('NowMoney'));
        $form->number('oldMoney', ___('OldMoney'));
        $form->textarea('source', ___('Source'));
        $form->number('time', ___('Time'));

        return $form;
    }
}