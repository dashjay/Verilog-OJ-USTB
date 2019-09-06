<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(SolutionsTableSeeder::class);
        $this->call(ProblemsTableSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
    }
}
