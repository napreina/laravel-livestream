<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\Publisher;
use Hash;
class PublisherController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Publisher);

        $grid->id('ID')->sortable();
        $grid->name('名称');
        $grid->avartar1('头像1');
        $grid->avartar2('头像2');
        $grid->phone('移动电话');
        $grid->password('密码');
        $grid->rating('评分');
        $grid->age('年龄');
        $grid->country('国度');
        $grid->gender('性别');   
        $grid->created_at('创造时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Publisher::findOrFail($id));

        $show->id('ID')->sortable();
        $show->name('名称');
        $show->avartar1('头像1');
        $show->avartar2('头像2');
        $show->phone('移动电话');
        $show->password('密码');
        $show->rating('评分');
        $show->age('年龄');
        $show->country('国度');
        $show->gender('性别');        
        $show->created_at('创造时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Publisher);

        $form->text('name', '名称');
        $form->image('avartar1', '头像1');
        $form->image('avartar2', '头像2');
        $form->mobile('phone', '移动电话');
        $form->password('password', '密码');
        $form->number('rating', '评分');
        $form->text('age', '年龄');
        $form->text('country', '国度');
        $form->text('gender', '性别');

        $form->saving(function (Form $form) {

           // var_dump($form->password);exit();
           $form->password = Hash::make( $form->password);
        });
        return $form;
    }
}
