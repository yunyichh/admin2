<?php

namespace App\Admin\Controllers;

use App\difficultyConfigurationStep;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class difficultyConfigurationStepController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\difficultyConfigurationStep';

    function __construct()
    {
        $this->title = _i('Ò»¼üÅäÖÃ½×¶Î');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new difficultyConfigurationStep());

        $grid->column('id', ___('Id'));
        $grid->column('phaseNum', ___('PhaseNum'))->editable();
        $grid->column('desc', ___('Desc'))->editable();
        $grid->column('riskFree', ___('RiskFree'))->editable();
        $grid->column('freeMinimumMultiple', ___('FreeMinimumMultiple'))->editable();
        $grid->column('freeMaximumMultiple', ___('FreeMaximumMultiple'))->editable();
        $grid->column('odds1', ___('Odds1'))->editable();
        $grid->column('minimumMultiple1', ___('MinimumMultiple1'))->editable();
        $grid->column('maxinumMultiple2', ___('MaxinumMultiple2'))->editable();
        $grid->column('odds2', ___('Odds2'))->editable();
        $grid->column('minimumMultiple2', ___('MinimumMultiple2'))->editable();

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
        $show = new Show(difficultyConfigurationStep::findOrFail($id));

        $show->field('id', ___('Id'));
        $show->field('phaseNum', ___('PhaseNum'));
        $show->field('desc', ___('Desc'));
        $show->field('riskFree', ___('RiskFree'));
        $show->field('freeMinimumMultiple', ___('FreeMinimumMultiple'));
        $show->field('freeMaximumMultiple', ___('FreeMaximumMultiple'));
        $show->field('odds1', ___('Odds1'));
        $show->field('minimumMultiple1', ___('MinimumMultiple1'));
        $show->field('maxinumMultiple2', ___('MaxinumMultiple2'));
        $show->field('odds2', ___('Odds2'));
        $show->field('minimumMultiple2', ___('MinimumMultiple2'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new difficultyConfigurationStep());

        $form->text('phaseNum', ___('PhaseNum'));
        $form->text('desc', ___('Desc'));
        $form->number('riskFree', ___('RiskFree'));
        $form->number('freeMinimumMultiple', ___('FreeMinimumMultiple'));
        $form->number('freeMaximumMultiple', ___('FreeMaximumMultiple'));
        $form->number('odds1', ___('Odds1'));
        $form->number('minimumMultiple1', ___('MinimumMultiple1'));
        $form->number('maxinumMultiple2', ___('MaxinumMultiple2'));
        $form->number('odds2', ___('Odds2'));
        $form->number('minimumMultiple2', ___('MinimumMultiple2'));

        return $form;
    }
}
