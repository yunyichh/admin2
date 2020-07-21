<?php

namespace App\Admin\Actions\Player;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Edit extends RowAction
{
    public $name = '编辑';

    public $accountId = null;


    public function handle(Model $model, Request $request)
    {
        $model->where('accountId', $request->get('accountId'))->update($request->get());
        return $this->response()->success('Success message.')->refresh();
    }

    public function form()
    {
        $this->text('accountId', ___('AccountId'))->default('');
        $this->text('accountName', ___('AccountName'));
        $this->text('accountPassword', ___('AccountPassword'));
        $this->text('accountType', ___('AccountType'));
        $this->text('age', ___('Age'));
        $this->text('createTime', ___('CreateTime'));
        $this->textarea('customImgUrl', ___('CustomImgUrl'));
        $this->text('exp', ___('Exp'));
        $this->text('expCalculateTime', ___('ExpCalculateTime'));
        $this->text('headImg', ___('HeadImg'));
        $this->text('level', ___('Level'));
        $this->text('lockTime', ___('LockTime'));
        $this->text('loginTime', ___('LoginTime'));
        $this->text('logoutTime', ___('LogoutTime'));
        $this->text('nickName', ___('NickName'));
        $this->mobile('phone', ___('Phone'));
        $this->text('recommended', ___('Recommended'));
        $this->text('robotFlag', ___('RobotFlag'));
        $this->text('serviceGameId', ___('ServiceGameId'));
        $this->text('sex', ___('Sex'));
        $this->text('sign', ___('Sign'));
        $this->text('starNO', ___('StarNO'));
        $this->text('state', ___('State'));
        $this->text('track', ___('Track'));
        $this->text('matchID', ___('MatchID'));
    }

}