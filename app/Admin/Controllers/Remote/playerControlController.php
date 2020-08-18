<?php

namespace App\Admin\Controllers\Remote;

use App\Admin\Actions\Control\player;
use App\Remote\playerControl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\DB;

class playerControlController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\playerControl';

    function title()
    {
        return _i('������');
    }

    function __construct()
    {
//        $dataTotal = DB::connection('mysql3')->table('gamerecordentity')->select(DB::raw(" accountId,sum(money) as totalAll"))->whereNotIn('tableCfgId', [401, 402, 403])->groupBy('accountId')->get();
//        $dataToday = DB::connection('mysql3')->table('gamerecordentity')->select(DB::raw(" accountId,sum(money) as totalToday"))->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->groupBy('accountId')->get();
//        $dataTotal = json_decode($dataTotal,true);
//        $dataToday = json_decode($dataToday,true);
//        DB::table('players_total')->truncate();
//        DB::table('players_total')->insert($dataTotal);
//        DB::table('players_today')->truncate();
//        DB::table('players_today')->insert($dataToday);

    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new playerControl());

        $grid->filter(function ($filter) {
            $filter->like('account.starNO', ___('starNO'));
        });
        $grid->disableCreateButton();
        $grid->disableBatchActions();
        $grid->disableExport();
        $grid->disableColumnSelector();
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableView();
            $actions->disableEdit();
            $actions->add(new player());
        });

        $grid->model()->orderBy('dzpkAward', 'desc');
        $grid->model()->orderByRaw('ABS(dzpkAward) asc');
        $grid->column('starNO', ___('starNO'))->display(function () {
            return $this->account['starNO'];
        });
        $grid->column('nickName', ___('nickName'))->display(function () {
            return $this->account['nickName'];
        });
        $grid->column('dzpkAward', ___('DzpkAward'))->sortable();
        $grid->column('dzpkAwardChance', ___('DzpkAwardChance'));
//        $grid->column('dzpkAwardTime', ___('DzpkAwardTime'));
        $grid->column('dzpkAwardTime', ___('dzpkAwardTime'))->display(function () {
            if (!empty($this->dzpkAwardTime))
                return date('Y-m-d H:i:s', $this->dzpkAwardTime / 1000);
            else
                return $this->dzpkAwardTime;
        });
        $grid->column('winLoseToday', ___('winLoseToday'))->display(function () {
            $winLoseToday = $this->gameLog2()->where('time', '>', strtotime(date('Y-m-d', time())) * 1000)->where('time', '<', (time() + (24 * 60 * 60)) * 1000)->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
            return $winLoseToday;
        })->sortable();
        $grid->column('totalWinLose', ___('totalWinLose'))->display(function () {
            $winLoseToday = $this->gameLog2()->whereNotIn('tableCfgId', [401, 402, 403])->sum('money');
            return $winLoseToday;
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
        $show = new Show(playerControl::findOrFail($id));

        $show->field('accountId', ___('AccountId'));
        $show->field('dzpkAward', ___('DzpkAward'));
        $show->field('dzpkAwardChance', ___('DzpkAwardChance'));
//        $show->field('dzpkAwardTime', ___('DzpkAwardTime'));
        $show->field('dzpkTime', ___('DzpkTime'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new playerControl());

        $form->number('accountId', ___('AccountId'));
        $form->number('dzpkAward', ___('DzpkAward'));
        $form->number('dzpkAwardChance', ___('DzpkAwardChance'));
//        $form->number('dzpkAwardTime', ___('DzpkAwardTime'));
        $form->number('dzpkTime', ___('DzpkTime'));

        return $form;
    }
}
