<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\playerControl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Control\playerControls;

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
        return _i('µã¿ØÍæ¼Ò');
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
            $actions->add(new playerControls());

        });

        $grid->column('starNO', ___('starNO'))->display(function(){
            return $this->account['starNO'];
        });
        $grid->column('accountId', ___('AccountId'));
        $grid->column('dzpkAward', ___('DzpkAward'));
        $grid->column('dzpkAwardChance', ___('DzpkAwardChance'));
//        $grid->column('dzpkAwardTime', ___('DzpkAwardTime'));
        $grid->column('dzpkTime', ___('DzpkTime'))->display(function () {
            if (!empty($this->dzpkTime))
                return date('Y-m-d H:i:s', $this->dzpkTime / 1000);
            else
                return $this->dzpkTime;
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
