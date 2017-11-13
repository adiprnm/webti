<?php

use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Semester::insert([
            [
                'semester_desc' => 'Semester 1',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 2',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 3',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 4',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 5',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 6',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 7',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'semester_desc' => 'Semester 8',
                'created_at'    => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
