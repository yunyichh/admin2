<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\chance;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Gears\Add;
use App\Admin\Actions\Gears\alter;
use App\Admin\Actions\Gears\Delete;

class chanceControlController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\chance';

    public function title()
    {
        return _i('µ²Î»¿ØÖÆ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new chance());
        $grid->disableExport();
        $grid->disableColumnSelector();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->tools(function(Grid\Tools $tools){
            $tools->append(new Add());
        });
        $grid->actions(function($actions){
           $actions->disableDelete();
           $actions->disableView();
           $actions->disableEdit();
           $actions->add(new alter());
           $actions->add(new Delete());
        });
        $grid->column('id', ___('Id control'));

        $grid->column('chance', ___('Chance control'));
        $grid->column('weight', ___('Weight control'));
        $grid->column('buffTime', ___('BuffTime control'));

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
        $show = new Show(chance::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('buffTime', ___('BuffTime'));
        $show->field('chance', ___('Chance'));
        $show->field('weight', ___('Weight'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new chance());

        $form->number('buffTime', ___('BuffTime'));
        $form->number('chance', ___('Chance'));
        $form->number('weight', ___('Weight'));

        return $form;
    }
}
