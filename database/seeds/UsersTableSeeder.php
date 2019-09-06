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

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'username' => 'dashjay',
                    'intro' => NULL,
                    'batch_id' => 1,
                    'avatar' => NULL,
                    'email' => NULL,
                    'password' => '$2y$10$08ojgDIUlc2YfxoG9qAbRO2RnbfAQAObAZzKhDapQ9pa7CCN1ivze',
                    'remember_token' => NULL,
                    'created_at' => '2019-09-06 07:29:09',
                    'updated_at' => '2019-09-06 07:29:09',
                ),
        ));


    }
}
