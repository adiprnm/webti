<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
            'rolename' => 'admin',
            'roledesc' => 'Administrator'
        ],
        [
            'rolename' => 'dosen',
            'roledesc' => 'Dosen Teknik Informatika'
        ]);
    }
}
