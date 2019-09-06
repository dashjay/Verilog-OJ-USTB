<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'username' => 'dashjay',
                'intro' => NULL,
                'avatar' => NULL,
                'email' => NULL,
                'password' => '$2y$10$7ApeRJ0lpdG8nCYmtqhFYuu1DOE.jfBtr/fF8F/3jHCmjMNaczbOS',
                'remember_token' => NULL,
                'created_at' => '2019-09-03 13:56:22',
                'updated_at' => '2019-09-03 13:56:22',
            ),
            1 => 
            array (
                'id' => 5,
                'username' => 'admin',
                'intro' => NULL,
                'avatar' => NULL,
                'email' => NULL,
                'password' => '$2y$10$tn11.QdsuC9v26xg30Wloe5EW952gOqigszRoTm11ZmJyc2sgf48e',
                'remember_token' => NULL,
                'created_at' => '2019-09-04 02:01:18',
                'updated_at' => '2019-09-04 02:01:18',
            ),
        ));
        
        
    }
}