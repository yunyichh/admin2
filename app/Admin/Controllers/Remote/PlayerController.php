<?php

namespace App\Admin\Controllers\Remote;

use App\Admin\Actions\Player\ChangeMoneyLog;
use App\Remote\Player;
use App\Remote\gameLog2;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Player\DistributionGold;
use App\Admin\Actions\Player\EditPhone;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Widgets\Table;
use Facade\FlareClient\Frame;
use App\Admin\Extensions\showGameLog2;
use Illuminate\Support\Facades\DB;

class PlayerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\Player';

    protected function title()
    {
        return _i('会员列表');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Player());
        $grid->disableColumnSelector();
        $grid->disableBatchActions();
        $grid->setResource("http://{$_SERVER['HTTP_HOST']}/vendor/layui/layui.js");

        $grid->filter(function ($filter) {
//            $filter->like('accountId', ___('AccountId'));
            $filter->like('starNO', ___('StarNO'));
            $filter->like('accountName', ___('AccountName'));
            $filter->like('', ___('regSource'));
            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('createTime', '>', $time);
            }, ___('CreateStartTime'))->datetime();

            $filter->where(function ($query) {
                $time = strtotime($this->input) * 1000;
                $query->where('createTime', '<', $time);
            }, ___('CreateEndTime'))->datetime();
            $filter->like('recommended', ___('Recommended'));
        });
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableEdit();
            $actions->disableDelete();
            $actions->add(new DistributionGold());
            $actions->add(new EditPhone());
            $actions->add(new ChangeMoneyLog());
        });

        $grid->disableCreateButton();
        $grid->model()->select(DB::raw('htgg.players_total.totalToday,htgg.players_total.totalAll,qpplatform.accountentity.*'))->where('robotFlag', 0)->orderBy('loginTime', 'desc');
        $grid->model()->leftJoin('htgg.players_total', 'htgg.players_total.accountId', '=', 'qpplatform.accountentity.accountId');

//        $grid->model()->where('robotFlag', 0)->orderBy('loginTime', 'desc');
//        $grid->model()->leftJoin('htgg.players_total', 'htgg.players_total.accountId', '=', 'qpplatform.accountentity.accountId');

        if (Admin::user()->inRoles(['agent'])) {
            $grid->model()->where('recommended', Admin::user()->agentId);
        }
        $grid->column('accountId', ___('AccountId'))->hide();
        $grid->column('starNO', ___('StarNO'));
        $grid->column('accountName', ___('AccountName'))->width(150);
        $grid->column('nickName', ___('NickName'))->width(150);
        $grid->column('regSource', ___('regSource'));
        $grid->column('totalRecharge', ___('totalRecharge'))->display(function () {
            $num = $this->orderBuy()->where('orderbuyentity.orderState', 2)->where('orderbuyentity.orderAccountId', $this->accountId)->sum('orderbuyentity.orderMoney');
            return $num;
        });
        $grid->column('', ___('totalBill'));

//        $grid->column('accountPassword', ___('AccountPassword'));
//        $grid->column('accountType', ___('AccountType'));
//        $grid->column('age', ___('Age'));
//        $grid->column('customImgUrl', ___('CustomImgUrl'));
//        $grid->column('exp', ___('Exp'));
//        $grid->column('expCalculateTime', ___('ExpCalculateTime'));
//        $grid->column('headImg', ___('HeadImg'));

        $grid->column('level', ___('vipGrade'));
        //401单桌 402双人桌

        $grid->column('totalToday', ___('winLoseToday'))->sortable();
        $grid->column('totalAll', ___('totalWinLose'))->sortable();

//        $grid->column('winLoseToday', ___('winLoseToday'))->display(function () {
//            $money = $this->gamelog2()->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
//            return $money;
//        });
//        $grid->column('totalWinLose', ___('totalWinLose'))->display(function () {
//            $money = $this->gamelog2()->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
//            return $money;
//        });


        $grid->column('gold', ___('gold'))->display(function () {
            if ($this->track == -1 || $this->track == 0) {
                return @json_decode($this->wallet, true)['goldMoney'];
            } elseif ($this->track == 1) {
                //德州扑克游戏中
                $money = @json_decode($this->player2, true)['money'];
//                if ($money == 0)
//                    $money = json_decode($this->wallet, true)['goldMoney'];
                return $money;
            }
        });
//        $grid->column('lockTime', ___('LockTime'));
//        $grid->column('phone', ___('Phone'));
        $grid->column('recommended', ___('Recommended'));
//        $grid->column('robotFlag', ___('RobotFlag'));
//        $grid->column('serviceGameId', ___('ServiceGameId'));
        $grid->column('createTime', ___('CreateTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();
        $grid->column('loginTime', ___('LoginTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();

        $grid->column('gameRecord', ___('gameRecord'))->display(function () {
            $url = "/admin/game-logs-frame?&account%5BstarNO%5D={$this->starNO}";
            return layui_open_a($url, _i('游戏记录'), _i('查看游戏记录'));
        });

        $grid->column('changeMoney', ___('changeMoney'))->display(function () {
            $url = "/admin/change-gold-records-frame?&account%5BstarNO%5D={$this->starNO}";
            return layui_open_a($url, _i('变化记录'), _i('金币变化记录'));
        });
        $grid->column('gamblingQuery', ___('gamblingQuery'))->display(function () {
            $url = "/admin/gambling-query-frame?&onlyId=&accountId={$this->accountId}";
            return layui_open_a($url, _i('对局记录'), _i('查看对局记录'));
        });

//        $grid->column('sex', ___('Sex'));
//        $grid->column('sign', ___('Sign'));
//        $grid->column('state', ___('State'));
//        $grid->column('track', ___('Track'));
//        $grid->column('matchID', ___('MatchID'));

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

        $show->field('accountId', ___('AccountId'));
        $show->field('accountName', ___('AccountName'));
        $show->field('accountPassword', ___('AccountPassword'));
        $show->field('accountType', ___('AccountType'));
        $show->field('age', ___('Age'));
        $show->field('createTime', ___('CreateTime'));
        $show->field('customImgUrl', ___('CustomImgUrl'));
        $show->field('exp', ___('Exp'));
        $show->field('expCalculateTime', ___('ExpCalculateTime'));
        $show->field('headImg', ___('HeadImg'));
        $show->field('level', ___('Level'));
        $show->field('lockTime', ___('LockTime'));
        $show->field('loginTime', ___('LoginTime'));
        $show->field('logoutTime', ___('LogoutTime'));
        $show->field('nickName', ___('NickName'));
        $show->field('phone', ___('Phone'));
        $show->field('recommended', ___('Recommended'));
        $show->field('robotFlag', ___('RobotFlag'));
        $show->field('serviceGameId', ___('ServiceGameId'));
        $show->field('sex', ___('Sex'));
        $show->field('sign', ___('Sign'));
        $show->field('starNO', ___('StarNO'));
        $show->field('state', ___('State'));
        $show->field('track', ___('Track'));
        $show->field('matchID', ___('MatchID'));

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

        $form->number('accountId', ___('AccountId'));
        $form->text('accountName', ___('AccountName'));
        $form->text('accountPassword', ___('AccountPassword'));
        $form->number('accountType', ___('AccountType'));
        $form->number('age', ___('Age'));
        $form->number('createTime', ___('CreateTime'));
//        $form->textarea('customImgUrl', ___('CustomImgUrl'));
//        $form->number('exp', ___('Exp'));
//        $form->number('expCalculateTime', ___('ExpCalculateTime'));
//        $form->number('headImg', ___('HeadImg'));
//        $form->number('level', ___('Level'));
//        $form->number('lockTime', ___('LockTime'));
//        $form->number('loginTime', ___('LoginTime'));
//        $form->number('logoutTime', ___('LogoutTime'));
        $form->text('nickName', ___('NickName'));
        $form->mobile('phone', ___('Phone'));
        $form->number('recommended', ___('Recommended'));
//        $form->number('robotFlag', ___('RobotFlag'));
//        $form->number('serviceGameId', ___('ServiceGameId'));
        $form->number('sex', ___('Sex'));
        $form->text('sign', ___('Sign'));
        $form->text('starNO', ___('StarNO'));
//        $form->number('state', ___('State'));
//        $form->number('track', ___('Track'));
//        $form->number('matchID', ___('MatchID'));
        return $form;
    }
}
