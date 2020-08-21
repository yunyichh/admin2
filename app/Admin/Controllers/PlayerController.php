<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Player\DistributionGold;
use App\Admin\Actions\Player\EditPhone;
use App\Admin\Actions\Player\LockOrUnLockAccount;
use App\Admin\Actions\Player\SendEmail;
use App\Player;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class PlayerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'player';
    //远程暂存本地对照列
    protected $RLColumn = [
        'starNO' => 'starNO',
        'nickName' => 'nickName',
        'accountName' => 'accountName',
        'registSource',
        'totalRecharge',
        'totalBill',
        'jetton',
        'vipGrade',
        'winLoseToday',
        'recommended' => 'inviterId',
        'loginTime' => 'lastLoginTime',
        'createTime' => 'createTime'
    ];

    public function __construct()
    {
        $this->title = _i('会员');
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 200;
        $start = 0;
        $limit = 10;
        if (!empty($page) && !empty($per_page)) {
            $start = ($page - 1) * $per_page;
            $limit = $per_page;
        }
        $sqls = ["select * from accountentity limit {$start},{$limit}"];
        $res = getResultsFromSqls(config('database.connections.mysql3'), $sqls, true)[0];

        //封装已获取数据
        $data = null;
        $RLColumn = $this->RLColumn;
        foreach ($res as $item) {
            $_row = null;
            foreach ($item as $ik => $iv) {
                if (in_array($ik, array_keys($RLColumn)) && isset($RLColumn[$ik])) {
                    $_row[$RLColumn[$ik]] = $iv;
                }
            }
            $data[] = $_row;
        }

        //添加总充值
        $accountIds = null;
        foreach ($res as $item2) {
            $accountIds[] = $item2['accountId'];
        }
        if (!empty($accountIds)) {
            $sqls = ["select * from orderbuyentity where orderState=2 and orderAccountId in ('" . implode('\',\'', $accountIds) . "')"];
            $res = getResultsFromSqls(config('database.connections.mysql3'), $sqls, true)[0];
        }

        if (!empty($data)) {
            DB::table('players')->truncate();
            DB::table('players')->insert($data);
        }
    }


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Player());
//        $grid->quickSearch('starNO','accountName','nickName','phone');

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('starNO', ___('starNO'));
            $filter->like('accountName', ___('accountName'));
            $filter->like('nickName', ___('nickName'));
            $filter->like('phone', ___('phone'));
        });
//        $grid->expandFilter();
        $grid->actions(function ($actions) {

            $actions->add(new DistributionGold());
            $actions->add(new LockOrUnLockAccount());
            $actions->add(new EditPhone());
            $actions->add(new SendEmail());
            // 去掉删除
            $actions->disableDelete();

            // 去掉编辑
            $actions->disableEdit();

            // 去掉查看
            $actions->disableView();
        });

//        $grid->column('id', ___('Id'));

//        'registSource',
//        'totalRecharge',
//        'totalBill',
//        'jetton',
//        'vipGrade',
//        'winLoseToday',
//        'recommended' => 'inviterId',
//        'loginTime' => 'lastLoginTime',
//        'createTime' => 'createTime'
        $grid->model()->orderBy('lastLoginTime','desc');
        $grid->column('starNO', ___('StarNO'));
        $grid->column('accountId', ___('AccountId'))->style('display:none');
        $grid->column('accountName', ___('AccountName'));
        $grid->column('registSource', ___('registSource'));
        $grid->column('totalRecharge', ___('totalRecharge'));
        $grid->column('totalBill', ___('totalBill'));
        $grid->column('jetton', ___('jetton'));
        $grid->column('vipGrade', ___('vipGrade'));
        $grid->column('winLoseToday', ___('winLoseToday'));
        $grid->column('recommended', ___('recommended'));
//        $grid->column('loginTime', ___('loginTime'));
//        $grid->column('createTime', ___('createTime'));
//        $grid->column('password', ___('Password'));
//        $grid->column('level', ___('Level'));
//        $grid->column('nickName', ___('NickName'));

//
//        $grid->column('phone', ___('Phone'));
//        $grid->column('headImg', ___('HeadImg'));
//        $grid->column('customHeadImg', ___('CustomHeadImg'));
//        $grid->column('state', ___('State'))->display(function ($state) {
//            return $state == 0 ? '<span style="color: darkgreen">' . _i('正常') . '</span>' : "<span style='color: darkred'>" . _i('冻结/') . date("Y-m-d H:i:s", (int)substr($this->lockTime, 0, 10) + 8 * 60 * 60) . "</span>";
//        });
//        $grid->column('lockTime', ___('LockTime'));
//        $grid->column('accountMoney', ___('AccountMoney'));//当前金币 携带金币 账号金币
//        $grid->column('bankMoney', ___('BankMoney'));//常规金库 金库金币
//
//        $grid->column('matchLockMoney', ___('MatchLockMoney'));
//        $grid->column('bankFixeMoney', ___('BankFixeMoney'));
//        $grid->column('selfLockMoney', ___('SelfLockMoney'));
//        $grid->column('bankAccural', ___('BankAccural'));//聚宝盆金币 保险箱金币

        $grid->column('lastLoginTime', ___('LastLoginTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) + 8 * 60 * 60);
        });
        $grid->column('createTime', ___('CreateTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) + 8 * 60 * 60);
        });
//        $grid->column('bankEndTime', ___('BankEndTime'))->display(function ($time) {
//            $time = date("Y-m-d H:i:s", (int)substr($time, 0, 10) + 8 * 60 * 60);
//            return "<span style='color: red'>$time</span>";
//        });
//        $grid->column('accountType', ___('AccountType'));//check
//        $grid->column('charitableMoney', ___('CharitableMoney'));//商城积分
////        $grid->column('check', ___('Check'));
//        $grid->column('matchMoney', ___('MatchMoney'));//赛事基金
////        $grid->column('mall_points', ___('Mall points'));
//
//        $grid->column('game_vip', ___('Game vip'))->display(function () {
//            $v1 = url("admin/vipList?type=1&accountId={$this->accountId}&starNO={$this->starNO}");
//            return "<select name='type'  onchange='window.location=this.value'><option value='0'>" . _i('请选择') . "</option><option value='{$v1}'>" . _i("德州扑克VIP") . "</option></select>";
//        });
//        $grid->column('game_record', ___('Game record'))->display(function ($vip) {
//
//            $v1 = url("admin/game-logs?type=1&accountId={$this->accountId}&starNO={$this->starNO}");
//            $v2 = url("admin/vault-logs?type=-1&accountId={$this->accountId}&starNO={$this->starNO}");
//            $v3 = url("admin/lotteries?type=-2&accountId={$this->accountId}&starNO={$this->starNO}");
//            return "<select name='type'  onchange='window.location=this.value'><option>" . _i('请选择') . "</option><option value='{$v1}'>" . _i("游戏记录") . "</option>
//                    <option value='{$v2}'>" . _i("金库记录") . "</option>
//                    <option value='{$v3}'>" . _i("彩票记录") . "</option></select>";
//        });
//        $grid->column('encrypted_detail', ___('Encrypted detail'));

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
        $show = new Show(Player::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountId', ___('AccountId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('password', ___('Password'));
        $show->field('starNO', ___('StarNO'));
        $show->field('nickName', ___('NickName'));
        $show->field('level', ___('Level'));
        $show->field('phone', ___('Phone'));
        $show->field('headImg', ___('HeadImg'));
        $show->field('customHeadImg', ___('CustomHeadImg'));
        $show->field('state', ___('State'));
        $show->field('lockTime', ___('LockTime'));
        $show->field('accountMoney', ___('AccountMoney'));
        $show->field('bankMoney', ___('BankMoney'));
        $show->field('bankAccural', ___('BankAccural'));
        $show->field('matchLockMoney', ___('MatchLockMoney'));
        $show->field('bankFixeMoney', ___('BankFixeMoney'));
        $show->field('selfLockMoney', ___('SelfLockMoney'));
        $show->field('createTime', ___('CreateTime'));
        $show->field('lastLoginTime', ___('LastLoginTime'));
        $show->field('bankEndTime', ___('BankEndTime'));
        $show->field('check', ___('Check'));
        $show->field('mall_points', ___('Mall points'));
        $show->field('charitableMoney', ___('CharitableMoney'));
        $show->field('game_vip', ___('Game vip'));
        $show->field('game_record', ___('Game record'));
        $show->field('encrypted_detail', ___('Encrypted detail'));
        $show->field('accountType', ___('AccountType'));
        $show->field('matchMoney', ___('MatchMoney'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Player());

        $form->text('accountId', ___('AccountId'));
        $form->text('accountName', ___('AccountName'));
        $form->password('password', ___('Password'));
        $form->text('starNO', ___('StarNO'));
        $form->text('nickName', ___('NickName'));
        $form->text('level', ___('Level'));
        $form->mobile('phone', ___('Phone'));
        $form->text('headImg', ___('HeadImg'));
        $form->text('customHeadImg', ___('CustomHeadImg'));
        $form->text('state', ___('State'));
        $form->number('lockTime', ___('LockTime'));
        $form->number('accountMoney', ___('AccountMoney'));
        $form->number('bankMoney', ___('BankMoney'));
        $form->number('bankAccural', ___('BankAccural'));
        $form->number('matchLockMoney', ___('MatchLockMoney'));
        $form->number('bankFixeMoney', ___('BankFixeMoney'));
        $form->number('selfLockMoney', ___('SelfLockMoney'));
        $form->text('createTime', ___('CreateTime'));
        $form->text('lastLoginTime', ___('LastLoginTime'));
        $form->text('bankEndTime', ___('BankEndTime'));
        $form->text('check', ___('Check'));
        $form->number('mall_points', ___('Mall points'));
        $form->number('charitableMoney', ___('CharitableMoney'));
        $form->text('game_vip', ___('Game vip'));
        $form->text('game_record', ___('Game record'));
        $form->text('encrypted_detail', ___('Encrypted detail'));
        $form->number('accountType', ___('AccountType'));
        $form->number('matchMoney', ___('MatchMoney'));

        return $form;
    }
}
