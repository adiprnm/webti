<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(RoleSeeder::class);
        //$this->call(CategorySeeder::class);
        //$this->call(TagSeeder::class);
        // $this->call(PageCategorySeeder::class);
        $this->call(SemesterSeeder::class);
        
    }
}