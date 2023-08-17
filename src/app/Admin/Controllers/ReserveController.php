<?php

namespace App\Admin\Controllers;

use App\Models\Reserve;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReserveController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Reserve';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reserve());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        //新たに追加するとvalueが現れる。
        $grid->column('value', __('Value'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Reserve::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        //試しに追加
        $show->field('value', __('Value'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Reserve());

        $form->text('name', __('Name'));
        $form->text('value', __('Value'));
        return $form;
    }
}
