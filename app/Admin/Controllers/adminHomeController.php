<?php

namespace App\Admin\Controllers;

use App\adminHome;
use Illuminate\Support\Facades\DB;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use think\View;

class adminHomeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\adminHome';

    function __construct()
    {
        $this->title = _i('首页');
        $data['totalRegister'] = DB::connection('mysql3')->table('accountentity')->where('robotFlag', 0)->count('accountId');
        $data['increasedToday'] = DB::connection('mysql3')->table('accountentity')->where('robotFlag', 0)->whereBetween('createTime', [
            strtotime(date("Y-m-d"), time()) * 1000,
            (strtotime(date("Y-m-d"), time()) + 24 * 60 * 60) * 1000,
        ])->count('accountId');
        $data['activeUserToday'] = DB::connection('mysql3')->table('accountloginlogentity', 'al')->leftJoin('accountentity as ac', 'al.accountId', '=', 'ac.accountId')->where('ac.robotFlag', 0)->whereBetween('al.time', [
            strtotime(date("Y-m-d"), time()) * 1000,
            (strtotime(date("Y-m-d"), time()) + 24 * 60 * 60) * 1000,
        ])->distinct('ac.accountId')->count();
        $data['wCode'] = DB::connection('mysql3')->table('changegoldrecordentity')->whereNotIn('sourceType', [27, 28, 29])->sum('changeMoney');
        $channelIn = DB::connection('mysql3')->table('agentaccountloginlogentity')->sum('money');
        $channelOut = 0;
        $chan = DB::connection('mysql3')->table('agentoperationlogentity')->where('operationType', 'low_score')->pluck('param');
        foreach ($chan as $value) {
            $channelOut += @explode('|', $value)[1];
        }
        $data['channel'] = _i('带入筹码量') . $channelIn . '  ' . _i('带出筹码量') . $channelOut;
        $data['channel'] = $channelIn . '  ' . $channelOut;
        DB::table('admin_home')->update($data);
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $_data = (array)DB::table('admin_home')->find(1);
        $data = array_combine(array_keys($_data), array_values($_data));
        return view('admin.home', $data);
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(adminHome::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('totalRegister', ___('TotalRegister'));
        $show->field('increasedToday', ___('IncreasedToday'));
        $show->field('totalRecharge', ___('TotalRecharge'));
        $show->field('rechargeToday', ___('RechargeToday'));
        $show->field('totalRechargeNum', ___('TotalRechargeNum'));
        $show->field('rechargeNumToday', ___('RechargeNumToday'));
        $show->field('activeUserToday', ___('ActiveUserToday'));
        $show->field('totalWinLoseRatio', ___('TotalWinLoseRatio'));
        $show->field('winLoseRatioToday', ___('WinLoseRatioToday'));
        $show->field('firstDownloadNum', ___('FirstDownloadNum'));
        $show->field('nextDayLogin', ___('NextDayLogin'));
        $show->field('threeDaysLogin', ___('ThreeDaysLogin'));
        $show->field('fourDaysLogin', ___('FourDaysLogin'));
        $show->field('fiveDaysLogin', ___('FiveDaysLogin'));
        $show->field('sixDaysLogin', ___('SixDaysLogin'));
        $show->field('sevenDaysLogin', ___('SevenDaysLogin'));
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
        $form = new Form(new adminHome());
        $form->text('totalRegister', ___('TotalRegister'));
        $form->text('increasedToday', ___('IncreasedToday'));
        $form->text('totalRecharge', ___('TotalRecharge'));
        $form->text('rechargeToday', ___('RechargeToday'));
        $form->text('totalRechargeNum', ___('TotalRechargeNum'));
        $form->text('rechargeNumToday', ___('RechargeNumToday'));
        $form->text('activeUserToday', ___('ActiveUserToday'));
        $form->text('totalWinLoseRatio', ___('TotalWinLoseRatio'));
        $form->text('winLoseRatioToday', ___('WinLoseRatioToday'));
        $form->text('firstDownloadNum', ___('FirstDownloadNum'));
        $form->text('nextDayLogin', ___('NextDayLogin'));
        $form->text('threeDaysLogin', ___('ThreeDaysLogin'));
        $form->text('fourDaysLogin', ___('FourDaysLogin'));
        $form->text('fiveDaysLogin', ___('FiveDaysLogin'));
        $form->text('sixDaysLogin', ___('SixDaysLogin'));
        $form->text('sevenDaysLogin', ___('SevenDaysLogin'));
        return $form;
    }
}
