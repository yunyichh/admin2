<?php

namespace App\Admin\Controllers;

use App\matchLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class matchLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\matchLog';

    protected function title()
    {
        return _i('赛事记录');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new matchLog());
        $grid->disableActions();
//        $grid->disableExport();
        $grid->disableCreateButton();
        $grid->disableBatchActions();
        $grid->filter(function ($filter) {
            $filter->like('uuid', ___('Uuid'));

        });
        $grid->column('uuid', ___('Uuid'));
        $grid->column('applyNum', ___('ApplyNum'));
        $grid->column('award', ___('Award'))->display(function () {
            $award = json_decode($this->award, true);
            $textAward = null;
            if (!empty($award))
                foreach ($award as $item) {
                    $textAward .= _i('第' . $item['rank'][1] . '名' . (($item['rank'][1] != $item['rank'][3]) ? ('到第' . $item['rank'][3] . "名") : "") . ':' . $item['award']) . "<br>";
                }
            return $textAward;
        });
        $grid->column('charge', ___('Charge'));

//        $grid->column('gameId', ___('GameId'));
        $grid->column('joinNum', ___('JoinNum'));
        $grid->column('ranks', ___('Ranks'))->display(function () {
            $text_rank = null;
            $arr_rank = @json_decode($this->ranks, true);
            if (!empty($arr_rank))
                foreach ($arr_rank as $rk => $rv) {
                    //不合理的sql
                    $account = DB::connection('mysql3')->table('accountentity')->where('accountId', $rv)->get(['robotFlag', 'starNO'])->toArray();
                    $href = url('admin/players') . '?&starNO=' . $account[0]->starNO;
                    $starNo = (($account[0]->robotFlag == 0) ? ("<a href='$href'>" . $account[0]->starNO . "</a><br>") : ("<span>" . $account[0]->starNO . "</span><br>"));
                    $text_rank .= _i('第' . $rk . '名:' . $starNo);
                }

            return $text_rank;
        });
        $grid->column('signMoney', ___('SignMoney'));
        $grid->column('signMoneyTotal', ___('signMoneyTotal'))->display(function () {
            return $this->applyNum * $this->signMoney;
        });
        $grid->column('startTime', ___('StartTime2'));
        $grid->column('endTime', ___('EndTime2'));
        $grid->column('time', ___('Time'))->display(function () {
            return date('Y-m-d H:i:s', $this->time / 1000);
        });
        $grid->column('type', ___('Type'))->display(function () {
            $typeMsg = [
                101 => '单桌',
                104 => '双人'
            ];
            return @_i($typeMsg[$this->type]);
        });

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
        $show = new Show(matchLog::findOrFail($id));

        $show->field('uuid', ___('Uuid'));
        $show->field('applyNum', ___('ApplyNum'));
        $show->field('award', ___('Award'));
        $show->field('charge', ___('Charge'));
        $show->field('endTime', ___('EndTime'));
        $show->field('gameId', ___('GameId'));
        $show->field('joinNum', ___('JoinNum'));
        $show->field('ranks', ___('Ranks'));
        $show->field('signMoney', ___('SignMoney'));
        $show->field('startTime', ___('StartTime'));
        $show->field('time', ___('Time'));
        $show->field('type', ___('Type'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new matchLog());

        $form->text('uuid', ___('Uuid'));
        $form->number('applyNum', ___('ApplyNum'));
        $form->text('award', ___('Award'));
        $form->number('charge', ___('Charge'));
        $form->number('endTime', ___('EndTime'));
        $form->number('gameId', ___('GameId'));
        $form->number('joinNum', ___('JoinNum'));
        $form->text('ranks', ___('Ranks'));
        $form->number('signMoney', ___('SignMoney'));
        $form->number('startTime', ___('StartTime'));
        $form->number('time', ___('Time'));
        $form->number('type', ___('Type'));

        return $form;
    }
}
