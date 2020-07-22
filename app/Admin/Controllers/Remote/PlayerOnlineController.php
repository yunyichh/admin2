<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\Player;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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
        return _i('�û������б�');
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
        $grid->actions(function ($actions) {
            $actions->disableEdit();
            $actions->disableView();
        });
        $grid->filter(function ($filter) {
            $filter->like('starNO', ___('StarNO'));
            $filter->like('accountName', ___('AccountName'));
        });
        $grid->model()->where('track', '>', 0)->orderBy('loginTime', 'desc');
        $grid->column('starNO', ___('StarNO'));
//        $grid->column('accountId', ___('AccountId'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('regSource', ___('regSource'));
//        $grid->column('accountPassword', ___('AccountPassword'));
//        $grid->column('accountType', ___('AccountType'));
//        $grid->column('age', ___('Age'));
//        $grid->column('customImgUrl', ___('CustomImgUrl'));
//        $grid->column('exp', ___('Exp'));
//        $grid->column('expCalculateTime', ___('ExpCalculateTime'));
//        $grid->column('headImg', ___('HeadImg'));

        $grid->column('wLSocreToday', ___('wLSocreToday'));
        $grid->column('wLScore', ___('wLScore'));
        $grid->column('leftGold', ___('leftGold'))->display(function () {
            if ($this->track == -1 || $this->track == 0) {
                return @json_decode($this->wallet, true)[0]['goldMoney'];
            } elseif ($this->track == 1) {
                $money = @json_decode($this->player2, true)[0]['money'];
                if ($money == 0)
                    $money = json_decode($this->wallet, true)[0]['goldMoney'];
                return $money;
            }
        });
//        $grid->column('lockTime', ___('LockTime'));

//        $grid->column('phone', ___('Phone'));
//        $grid->column('recommended', ___('Recommended'));
//        $grid->column('robotFlag', ___('RobotFlag'));
//        $grid->column('serviceGameId', ___('ServiceGameId'));

        $grid->column('loginTime', ___('LoginTime'))->display(function ($time) {
            return date("Y-m-d H:i:s", (int)substr($time, 0, 10) + 8 * 60 * 60);
        })->sortable();
//        $grid->column('sex', ___('Sex'));
//        $grid->column('sign', ___('Sign'));
//        $grid->column('state', ___('State'));
        $grid->column('track', ___('Track'));
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