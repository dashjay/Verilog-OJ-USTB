<?php

use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('announcements')->delete();
        
        \DB::table('announcements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '这次比赛我们绝对不报销',
                'content' => '本次比赛产生费用由学生自己负责，与USTBOJ无关',
                'created_by' => 1,
                'created_at' => '2019-09-04 04:06:58',
                'updated_at' => '2019-09-04 04:06:58',
            ),
        ));
        
        
    }
}