<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Adumskis\LaravelAdvert\Model\Advert;
use Hash;
class AdvertiseController extends Controller
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
        $grid = new Grid(new Advert);

        $grid->id('ID')->sortable();  
        $grid->alt('摘要');
        $grid->url('网址');
        $grid->image_url('图片网址');
        $grid->image_path('图像路径');
        $grid->views('查看号码');
        $grid->clicks('点击号码');
        $grid->active('活性');
        $grid->active_category_id('活动类别ID');
        $grid->viewed_at('观看时间');
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
        $show = new Show(Advert::findOrFail($id));

        $show->id('ID')->sortable();  
        $show->alt('摘要');
        $show->url('网址');
        $show->image_url('图片网址');
        $show->image_path('图像路径');
        $show->views('查看号码');
        $show->clicks('点击号码');
        $show->active('活性');
        $show->active_category_id('活动类别ID');
        $show->viewed_at('观看时间');
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
        $form = new Form(new Advert);
        $form->text('alt', '摘要');
        $form->text('url', '网址');        
        $form->text('image_url', '图片网址');        
        $form->text('image_path', '图像路径');        
        $form->number('views', '查看号码');        
        $form->number('clicks', '点击号码');
        $form->boolean('active', '活性');        
        $form->number('active_category_id', '活动类别ID');        
        $form->timestamp('viewed_at', '观看时间');

        return $form;
    }
}
