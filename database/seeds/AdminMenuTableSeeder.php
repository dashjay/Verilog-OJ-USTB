<?php

use Illuminate\Database\Seeder;

class AdminMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_menu')->delete();
        
        \DB::table('admin_menu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => 'Dashboard',
                'icon' => 'fa-bar-chart',
                'uri' => '/',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => 'Admin',
                'icon' => 'fa-tasks',
                'uri' => '',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'title' => 'Users',
                'icon' => 'fa-users',
                'uri' => 'auth/users',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 4,
                'title' => 'Roles',
                'icon' => 'fa-user',
                'uri' => 'auth/roles',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 2,
                'order' => 5,
                'title' => 'Permission',
                'icon' => 'fa-ban',
                'uri' => 'auth/permissions',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 2,
                'order' => 6,
                'title' => 'Menu',
                'icon' => 'fa-bars',
                'uri' => 'auth/menu',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 2,
                'order' => 7,
                'title' => 'Operation log',
                'icon' => 'fa-history',
                'uri' => 'auth/logs',
                'permission' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'order' => 0,
                'title' => '用户管理',
                'icon' => 'fa-bars',
                'uri' => 'users',
                'permission' => '*',
                'created_at' => '2019-09-04 03:46:42',
                'updated_at' => '2019-09-04 03:46:42',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'order' => 0,
                'title' => '通知管理',
                'icon' => 'fa-align-center',
                'uri' => 'announcements',
                'permission' => '*',
                'created_at' => '2019-09-04 03:49:45',
                'updated_at' => '2019-09-04 03:49:57',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'order' => 0,
                'title' => '题目管理',
                'icon' => 'fa-book',
                'uri' => 'problems',
                'permission' => '*',
                'created_at' => '2019-09-04 05:01:33',
                'updated_at' => '2019-09-04 05:01:33',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'order' => 0,
                'title' => '标签管理',
                'icon' => 'fa-hashtag',
                'uri' => 'tags',
                'permission' => '*',
                'created_at' => '2019-09-04 07:53:49',
                'updated_at' => '2019-09-04 07:53:49',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'order' => 8,
                'title' => 'Media manager',
                'icon' => 'fa-file',
                'uri' => 'media',
                'permission' => NULL,
                'created_at' => '2019-09-05 05:02:26',
                'updated_at' => '2019-09-05 05:02:26',
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'order' => 0,
                'title' => 'Solution',
                'icon' => 'fa-files-o',
                'uri' => 'solutions',
                'permission' => '*',
                'created_at' => '2019-09-05 12:55:26',
                'updated_at' => '2019-09-05 12:55:26',
            ),
        ));
        
        
    }
}