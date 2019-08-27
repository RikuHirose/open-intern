<?php

namespace App\Admin\Controllers;

use App\Models\Company;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompanyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Company';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Company);

        $grid->column('id', __('Id'));
        $grid->column('mission', __('Mission'));
        $grid->column('desired_person', __('Desired person'));
        $grid->column('name', __('Name'));
        $grid->column('desc', __('Desc'));
        $grid->column('address', __('Address'));
        $grid->column('member_count', __('Member count'));
        $grid->column('established_at', __('Established at'));
        $grid->column('founder', __('Founder'));
        $grid->column('hp_url', __('Hp url'));
        $grid->column('fb_url', __('Fb url'));
        $grid->column('tw_url', __('Tw url'));
        $grid->column('pickup_flag', __('Pickup flag'));
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
        $show = new Show(Company::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('mission', __('Mission'));
        $show->field('desired_person', __('Desired person'));
        $show->field('name', __('Name'));
        $show->field('desc', __('Desc'));
        $show->field('address', __('Address'));
        $show->field('member_count', __('Member count'));
        $show->field('established_at', __('Established at'));
        $show->field('founder', __('Founder'));
        $show->field('hp_url', __('Hp url'));
        $show->field('fb_url', __('Fb url'));
        $show->field('tw_url', __('Tw url'));
        $show->field('pickup_flag', __('Pickup flag'));
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
        $form = new Form(new Company);

        $form->text('mission', __('Mission'));
        $form->text('desired_person', __('Desired person'));
        $form->text('name', __('Name'));
        $form->textarea('desc', __('Desc'));
        $form->text('address', __('Address'));
        $form->number('member_count', __('Member count'))->default(0);
        $form->text('established_at', __('Established at'));
        $form->text('founder', __('Founder'));
        $form->text('hp_url', __('Hp url'));
        $form->text('fb_url', __('Fb url'));
        $form->text('tw_url', __('Tw url'));
        $form->switch('pickup_flag', __('Pickup flag'));

        return $form;
    }
}
