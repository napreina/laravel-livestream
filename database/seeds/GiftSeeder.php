<?php

use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
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
        \DB::table('table_gifts')->truncate();

        \DB::table('table_gifts')->insert([
            [
                'id'             => 1,
                'name'           => '涩会粽',
                'amount'         => '10',
                'motion_file'       =>'/images/1.png',
                'avartar_file'       => '/images/1.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 2,
                'name'           => '陪你看星星',
                'amount'         => '33440',
                'motion_file'       => '/images/2.png',
                'avartar_file'       => '/images/2.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 3,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/3.png',
                'avartar_file'       => '/images/3.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 4,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/4.png',
                'avartar_file'       => '/images/4.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 5,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/5.png',
                'avartar_file'       => '/images/5.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 6,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/6.png',
                'avartar_file'       => '/images/6.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 7,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/7.png',
                'avartar_file'       => '/images/7.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 8,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/8.png',
                'avartar_file'       => '/images/8.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 9,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/9.png',
                'avartar_file'       => '/images/9.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 10,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/10.png',
                'avartar_file'       => '/images/10.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 11,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/11.png',
                'avartar_file'       => '/images/11.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 12,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/12.png',
                'avartar_file'       => '/images/12.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 13,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/13.png',
                'avartar_file'       => '/images/13.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 14,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/14.png',
                'avartar_file'       => '/images/14.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 15,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/15.png',
                'avartar_file'       => '/images/15.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 16,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/16.png',
                'avartar_file'       => '/images/16.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 17,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/17.png',
                'avartar_file'       => '/images/17.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 18,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/18.png',
                'avartar_file'       => '/images/18.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 19,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/19.png',
                'avartar_file'       => '/images/19.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 20,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/20.png',
                'avartar_file'       => '/images/20.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 21,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/21.png',
                'avartar_file'       => '/images/21.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 22,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/22.png',
                'avartar_file'       => '/images/22.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 23,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/23.png',
                'avartar_file'       => '/images/23.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 24,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/24.png',
                'avartar_file'       => '/images/24.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 25,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/25.png',
                'avartar_file'       => '/images/25.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 26,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/26.png',
                'avartar_file'       => '/images/26.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 27,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/27.png',
                'avartar_file'       => '/images/27.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 28,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/28.png',
                'avartar_file'       => '/images/28.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 29,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/29.png',
                'avartar_file'       => '/images/29.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 30,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/30.png',
                'avartar_file'       => '/images/30.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 31,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/31.png',
                'avartar_file'       => '/images/31.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 32,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/32.png',
                'avartar_file'       => '/images/32.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 33,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/33.png',
                'avartar_file'       => '/images/33.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 34,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/34.png',
                'avartar_file'       => '/images/34.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 35,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/35.png',
                'avartar_file'       => '/images/35.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 36,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/36.png',
                'avartar_file'       => '/images/36.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 37,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/37.png',
                'avartar_file'       => '/images/37.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 38,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/38.png',
                'avartar_file'       => '/images/38.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 39,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/39.png',
                'avartar_file'       => '/images/39.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ],
            [
                'id'             => 40,
                'name'           => '撩一下',
                'amount'         => '10',
                'motion_file'       => '/images/40.png',
                'avartar_file'       => '/images/40.png',  
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),               
                
            ]
        ]);
    }
}
