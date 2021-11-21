<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \DB::table('admin_menu')->truncate();

        \DB::table('admin_menu')->insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => 'Dashboard',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => 'Admin',
                'icon'      => 'fa-tasks',
                'uri'       => '',
            ],
            [
                'parent_id' => 2,
                'order'     => 3,
                'title'     => 'Users',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 2,
                'order'     => 4,
                'title'     => 'Roles',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 2,
                'order'     => 5,
                'title'     => 'Permission',
                'icon'      => 'fa-ban',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 2,
                'order'     => 6,
                'title'     => 'Menu',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 2,
                'order'     => 7,
                'title'     => 'Operation log',
                'icon'      => 'fa-history',
                'uri'       => 'auth/logs',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'LiveChannel',
                'icon'      => 'fa-bars',
                'uri'       => '/channel',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'Gift',
                'icon'      => 'fa-gift',
                'uri'       => '/gift',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'Wallet',
                'icon'      => 'fa-money',
                'uri'       => '/wallet',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'Comment',
                'icon'      => 'fa-commenting',
                'uri'       => '/comment',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'History',
                'icon'      => 'fa-history',
                'uri'       => '/history',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'User',
                'icon'      => 'fa-users',
                'uri'       => '/user',
            ],
            [
                'parent_id' => 12,
                'order'     => 0,
                'title'     => 'PaymentHistory',
                'icon'      => 'fa-paypal',
                'uri'       => '/payment_history',
            ],
            [
                'parent_id' => 12,
                'order'     => 0,
                'title'     => 'Gift_HIstory',
                'icon'      => 'fa-magic',
                'uri'       => '/gift_history',
            ],
            [
                'parent_id' => 13,
                'order'     => 0,
                'title'     => 'Channel_User',
                'icon'      => 'fa-user',
                'uri'       => '/channel_user',
            ],
            [
                'parent_id' => 13,
                'order'     => 0,
                'title'     => 'Channel_Publisher',
                'icon'      => 'fa-user-secret',
                'uri'       => '/channel_publisher',
            ],
            [
                'parent_id' => 0,
                'order'     => 0,
                'title'     => 'Report',
                'icon'      => 'fa-warning',
                'uri'       => '/report',
            ],
        ]);
    }
}
