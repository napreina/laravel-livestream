<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use App\User;
use App\Wallet;
use Hash;
class UserController extends Controller
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
        $grid = new Grid(new User);

        $grid->id('ID')->sortable();
        $grid->name('名称');
        $grid->avartar('头像');
        $grid->phone('移动电话');
        $grid->password('密码');
        $grid->wallet_id('钱包ID');
        $grid->status('状态');
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
        $show = new Show(User::findOrFail($id));

        $show->id('ID')->sortable();
        $show->name('名称');
        $show->avartar('头像');
        $show->phone('移动电话');
        $show->password('密码');
        $show->wallet_id('钱包ID');
        $show->status('状态');
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
        $form = new Form(new User);

        $form->text('name', '名称');
        $form->image('avartar', '头像');
        $form->mobile('phone', '移动电话');
        $form->password('password', '密码');
            $wallet = Wallet::latest()->first();
        $form->number('wallet_id', '钱包ID')->value($wallet->id +1);
        $form->text('Status', '状态');

        $form->saving(function (Form $form) {

           // var_dump($form->password);exit();
           $form->password = Hash::make( $form->password);
        });
        return $form;
    }
}
