<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$nfcGkhlVd.6nmUP/RwFTHOD3OmWwC2vKQTmbgnnOiqndx8ZNQTiCW',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => 'D80e6cw14qFPAWwLpnEWglqTokbErvYE94kH559ZN78FC8WqlUiBeGSuzN7n',
                'created_at' => '2019-09-04 03:45:36',
                'updated_at' => '2019-09-04 03:45:36',
            ),
        ));
        
        
    }
}