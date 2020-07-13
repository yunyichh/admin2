<?php

namespace App\Admin\Controllers;

use App\Lottery;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LotteryConroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'lottery log';

    public function __construct()
    {
        $this->title = _i('²ÊÆ±¼ÇÂ¼');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Lottery());
        if (!empty(@$_GET['starNO']))
            $grid->model()->where('playId', $_GET['starNO']);
//        $grid->column('lotteryId', ___('LotteryId'));
        $grid->column('buyMoney', ___('BuyMoney'));
        $grid->column('buyTime', ___('BuyTime'));
        $grid->column('faceValue', ___('FaceValue'));
        $grid->column('playId', ___('PlayId'));
        $grid->column('winMoney', ___('WinMoney'));
        $grid->column('winOrlose', ___('WinOrlose'));

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
        $show = new Show(Lottery::findOrFail($id));

        $show->field('lotteryId', ___('LotteryId'));
        $show->field('buyMoney', ___('BuyMoney'));
        $show->field('buyTime', ___('BuyTime'));
        $show->field('faceValue', ___('FaceValue'));
        $show->field('playId', ___('PlayId'));
        $show->field('winMoney', ___('WinMoney'));
        $show->field('winOrlose', ___('WinOrlose'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Lottery());

        $form->number('lotteryId', ___('LotteryId'));
        $form->number('buyMoney', ___('BuyMoney'));
        $form->datetime('buyTime', ___('BuyTime'))->default(date('Y-m-d H:i:s'));
        $form->number('faceValue', ___('FaceValue'));
        $form->text('playId', ___('PlayId'));
        $form->number('winMoney', ___('WinMoney'));
        $form->number('winOrlose', ___('WinOrlose'));

        return $form;
    }
}
