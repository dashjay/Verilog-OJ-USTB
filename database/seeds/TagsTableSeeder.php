<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '触发器',
                'created_at' => '2019-09-06 02:12:03',
                'updated_at' => '2019-09-06 02:12:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '乘法器',
                'created_at' => '2019-09-06 02:12:06',
                'updated_at' => '2019-09-06 02:12:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '赵文杰',
                'created_at' => '2019-09-06 02:12:13',
                'updated_at' => '2019-09-06 02:12:13',
            ),
        ));
        
        
    }
}