<?php

namespace App\Admin\Controllers;

use App\agentUser;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class agentUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\agentUser';

    function __construct()
    {
        $this->title = _i("代理账号");
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new agentUser());

        $grid->column('id', ___('Id'));
        $grid->column('accountName', ___('AccountName'));
        $grid->column('nickName', ___('NickName'));
        $grid->column('password', ___('Password'));
        $grid->column('agentRole', ___('AgentRole'));
        $grid->column('associatedGameAccount', ___('AssociatedGameAccount'));
        $grid->column('associatedGameId', ___('AssociatedGameId'));
//        $grid->column('agencyCommission', ___('AgencyCommission'));
//        $grid->column('platFormWinLose', ___('PlatFormWinLose'));
//        $grid->column('platformFee', ___('PlatformFee'));
//        $grid->column('inverse', ___('Inverse'));
//        $grid->column('discount', ___('Discount'));
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
        $show = new Show(agentUser::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('accountName', ___('AccountName'));
        $show->field('nickName', ___('NickName'));
        $show->field('password', ___('Password'));
        $show->field('agentRole', ___('AgentRole'));
        $show->field('associatedGameAccount', ___('AssociatedGameAccount'));
        $show->field('associatedGameId', ___('AssociatedGameId'));
        $show->field('agencyCommission', ___('AgencyCommission'));
        $show->field('platFormWinLose', ___('PlatFormWinLose'));
        $show->field('platformFee', ___('PlatformFee'));
        $show->field('inverse', ___('Inverse'));
        $show->field('discount', ___('Discount'));
        $show->field('created_at', ___('Created at'));
        $show->field('updated_at', ___('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new agentUser());

        $form->text('accountName', ___('AccountName'));
        $form->text('nickName', ___('NickName'));
        $form->password('password', ___('Password'));
        $form->text('agentRole', ___('AgentRole'));
        $form->text('associatedGameAccount', ___('AssociatedGameAccount'));
        $form->text('associatedGameId', ___('AssociatedGameId'));
        $form->text('agencyCommission', ___('AgencyCommission'));
        $form->text('platFormWinLose', ___('PlatFormWinLose'));
        $form->text('platformFee', ___('PlatformFee'));
        $form->text('inverse', ___('Inverse'));
        $form->text('discount', ___('Discount'));

        $text = "<p>佣金结算方式配置:</p>";
        $text .= "<p>(平台输赢-平台费-反水-优惠)*比例</p>";
        $text .= "<p>所有一级代理产生的税收*一级返佣比例+所有二级代理产生的税收*二级返佣比例+所有三级代理产生的税收*三级返佣比例</p>";
        $form->html(_i($text));

        return $form;
    }
}
