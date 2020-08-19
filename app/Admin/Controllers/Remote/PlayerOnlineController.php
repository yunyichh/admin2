<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\Player;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Facades\Admin;

class PlayerOnlineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\PlayerOnline';

    protected function title()
    {
        return _i('用户在线列表');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Player());
        $grid->disableCreateButton();
        $grid->disableColumnSelector();
        $grid->disableBatchActions();
        $grid->disableActions();
        $grid->actions(function ($actions) {
            $actions->disableEdit();
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->filter(function ($filter) {
            $filter->like('starNO', ___('StarNO'));
            $filter->like('accountName', ___('AccountName'));
        });

        //track没有实时更新
        $grid->model()->where('robotFlag', 0)->where('track', '>=', 0)->orderBy('loginTime', 'desc');
        $grid->model()->leftJoin('htgg.players_total', 'htgg.players_total.accountId', '=', 'qpplatform.accountentity.accountId');
        if (Admin::user()->inRoles(['agent'])) {
            $grid->model()->where('recommended', Admin::user()->agentId);
        }
        $grid->column('starNO', ___('StarNO'));
//        $grid->column('accountId', ___('AccountId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('track', ___('status'))->display(function () {
            $track = [
                -1 => '离线',
                0 => '大厅',
                1 => '德州扑克游戏中',
            ];
            return @_i($track[$this->track]);
        });
//        $grid->column('accountPassword', ___('AccountPassword'));
//        $grid->column('accountType', ___('AccountType'));
//        $grid->column('age', ___('Age'));
//        $grid->column('customImgUrl', ___('CustomImgUrl'));
//        $grid->column('exp', ___('Exp'));
//        $grid->column('expCalculateTime', ___('ExpCalculateTime'));
//        $grid->column('headImg', ___('HeadImg'));

        $grid->column('totalToday', ___('wLSocreToday'))->sortable();
        $grid->column('totalAll', ___('wLScore'))->sortable();
//        $grid->column('winLoseToday', ___('winLoseToday'))->display(function () {
//            $money = $this->gamelog2()->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
//            return $money;
//        });
//        $grid->column('totalWinLose', ___('totalWinLose'))->display(function () {
//            $money = $this->gamelog2()->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
//            return $money;
//        });
        $grid->column('leftGold', ___('leftGold'))->display(function () {
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
//        $grid->column('recommended', ___('Recommended'));
//        $grid->column('robotFlag', ___('RobotFlag'));
//        $grid->column('serviceGameId', ___('ServiceGameId'));

        $grid->column('loginTime', ___('LoginTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10));
        })->sortable();
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

        $show->field('level', ___('Level'));

        $show->field('nickName', ___('NickName'));
        $show->field('phone', ___('Phone'));

        $show->field('starNO', ___('StarNO'));
        $show->field('state', ___('State'));


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
        $form->textarea('customImgUrl', ___('CustomImgUrl'));
        $form->number('exp', ___('Exp'));
        $form->number('expCalculateTime', ___('ExpCalculateTime'));
        $form->number('headImg', ___('HeadImg'));
        $form->number('level', ___('Level'));
        $form->number('lockTime', ___('LockTime'));
        $form->number('loginTime', ___('LoginTime'));
        $form->number('logoutTime', ___('LogoutTime'));
        $form->text('nickName', ___('NickName'));
        $form->mobile('phone', ___('Phone'));
        $form->number('recommended', ___('Recommended'));
        $form->number('robotFlag', ___('RobotFlag'));
        $form->number('serviceGameId', ___('ServiceGameId'));
        $form->number('sex', ___('Sex'));
        $form->text('sign', ___('Sign'));
        $form->text('starNO', ___('StarNO'));
        $form->number('state', ___('State'));
        $form->number('track', ___('Track'));
        $form->number('matchID', ___('MatchID'));

        return $form;
    }
}
