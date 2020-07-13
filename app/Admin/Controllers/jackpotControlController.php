<?php

namespace App\Admin\Controllers;

use App\jackpotControl;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class jackpotControlController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\jackpotControl';

    function __construct()
    {
        $this->title = _i('½±³Ø¿ØÖÆ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new jackpotControl());

        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('serverName', ___('serverName'));
        });
        $grid->column('id', ___('Id'));
        $grid->column('serverId', ___('ServerId'))->editable();
        $grid->column('serverName', ___('ServerName'))->editable();
        $grid->column('smallJackpotScore', ___('SmallJackpotScoreS'))->editable();
        $grid->column('mediumJackpotScore', ___('MediumJackpotScoreS'))->editable();
        $grid->column('largeJackpotScore', ___('LargeJackpotScoreS'))->editable();
        $grid->column('smallJackpotOdds', ___('SmallJackpotOdds'))->editable();
        $grid->column('mediumJackpotOdds', ___('MediumJackpotOdds'))->editable();
        $grid->column('largeJackpotOdds', ___('LargeJackpotOdds'))->editable();
        $grid->column('smallJackpotRatio', ___('SmallJackpotRatio'))->editable();
        $grid->column('MediumJackpotRatio', ___('MediumJackpotRatio'))->editable();
        $grid->column('LargeJackpotRatio', ___('LargeJackpotRatio'))->editable();
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
        $show = new Show(jackpotControl::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('serverId', ___('ServerId'));
        $show->field('serverName', ___('ServerName'));
        $show->field('smallJackpotScore', ___('SmallJackpotScoreS'));
        $show->field('mediumJackpotScore', ___('MediumJackpotScoreS'));
        $show->field('largeJackpotScore', ___('LargeJackpotScoreS'));
        $show->field('smallJackpotOdds', ___('SmallJackpotOdds'));
        $show->field('mediumJackpotOdds', ___('MediumJackpotOdds'));
        $show->field('largeJackpotOdds', ___('LargeJackpotOdds'));
        $show->field('smallJackpotRatio', ___('SmallJackpotRatio'));
        $show->field('smallJackpotRatio', ___('MediumJackpotRatio'));
        $show->field('smallJackpotRatio', ___('LargeJackpotRatio'));
//        $show->field('created_at', ___('Created at'));
//        $show->field('updated_at', ___('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new jackpotControl());

        $form->text('serverId', ___('ServerId'));
        $form->text('serverName', ___('ServerName'));
        $form->text('smallJackpotScore', ___('SmallJackpotScoreS'));
        $form->text('mediumJackpotScore', ___('MediumJackpotScoreS'));
        $form->text('largeJackpotScore', ___('LargeJackpotScoreS'));
        $form->text('smallJackpotOdds', ___('SmallJackpotOdds'));
        $form->text('mediumJackpotOdds', ___('MediumJackpotOdds'));
        $form->text('largeJackpotOdds', ___('LargeJackpotOdds'));
        $form->text('smallJackpotRatio', ___('SmallJackpotRatio'));
        $form->text('MediumJackpotRatio', ___('MediumJackpotRatio'));
        $form->text('MediumJackpotRatio', ___('LargeJackpotRatio'));
        return $form;
    }
}
