<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
        \DB::table('table_category')->truncate();

        \DB::table('table_category')->insert([
            [
                'id'  => 1,
                'name' => 'popular',
                'detail' => 'The most popular list of live channel.',   
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),                    
            ],
            [
                'id'  => 2,
                'name' => 'fashion',
                'detail' => 'The most fashion list of live channel.',   
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),                    
            ],
            [
                'id'  => 3,
                'name' => 'knowhow',
                'detail' => 'The most knowhow list of live channel.',   
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),                    
            ],
            [
                'id'  => 4,
                'name' => 'music',
                'detail' => 'The music list of live channel.',   
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),                    
            ],
            [
                'id'  => 5,
                'name' => 'dance',
                'detail' => 'The dance list of live channel.',   
                'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),                    
            ],
        ]);
    }
}
