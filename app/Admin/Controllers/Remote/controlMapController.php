<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\controlmap;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class controlMapController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\controlmap';

    function title()
    {
       return _i('³ïÂë¿ØÖÆ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new controlmap());
        $grid->disableFilter();
        $grid->disableCreateButton();
        $grid->disableBatchActions();
        $grid->disablePagination();
        $grid->disableExport();
        $grid->disableColumnSelector();

        $grid->column('id', ___('mapId'));
//        $grid->column('mapKey', ___('MapKey'));

        $grid->column('mapExplain', ___('MapExplain'));
        $grid->column('mapValue', ___('MapValue'));

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
        $show = new Show(controlmap::findOrFail($id));

        $show->field('id', ___('mapId'));
        $show->field('mapKey', ___('MapKey'));
        $show->field('mapValue', ___('MapValue'));
        $show->field('mapExplain', ___('MapExplain'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new controlmap());

        $form->text('mapKey', ___('MapKey'));
        $form->text('mapValue', ___('MapValue'));
        $form->text('mapExplain', ___('MapExplain'));

        return $form;
    }
}
