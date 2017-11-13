<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::insert([
            [
                'category_name' => 'Tentang Teknik Informatika',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Mahasiswa dan Lulusan',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Sumber Daya Manusia',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Akademik',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Sarana dan Prasarana',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Penelitian',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'category_name' => 'Pengabdian',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]);
    }
}
