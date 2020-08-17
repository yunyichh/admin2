<?php

namespace App\Admin\Controllers\Remote;

use App\Remote\pool;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Pool\poolEdit;
use App\Admin\Actions\Pool\poolRowEdit;


class poolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Remote\pool';

    public function title()
    {
        return _i('Ë®³ØÅäÖÃ');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pool());
        $grid->disableExport();
        $grid->disableColumnSelector();
        $grid->disableBatchActions();
        $grid->disableCreateButton();
        $grid->disableFilter();
        $grid->actions(function ($acitons) {
            $acitons->disableDelete();
            $acitons->disableView();
            $acitons->disableEdit();
            $acitons->add(new poolRowEdit());
        });
        $grid->tools(function(Grid\Tools $tools){
            $tools->append(new poolEdit());
        });
//        $grid->column('id', ___('Id'));
        $grid->column('mapExplain', ___('MapExplain'));
//        $grid->column('mapKey', ___('MapKey'));
        $grid->column('mapValue', ___('MapValue'))->display(function () {
            if ($this->mapKey == 'dzpk_pool') {
                $json_value = getHttpResponseGET(getUrl('dzpk_pool'));
                return json_decode($json_value,true)['res'];
            } else {
                return $this->mapValue;
            }
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
        $show = new Show(pool::findOrFail($id));

        $show->field('id', ___('Id'));
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
        $form = new Form(new pool());

        $form->text('mapKey', ___('MapKey'));
        $form->text('mapValue', ___('MapValue'));
        $form->text('mapExplain', ___('MapExplain'));

        return $form;
    }
}
