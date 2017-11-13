<?php

use Illuminate\Database\Seeder;

class PageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PageCategory::insert([
            [
                'user_id_cat'   => '1',
                'category_name' => 'Tentang TI',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id_cat'   => '1',
                'category_name' => 'Kemahasiswaan & Lulusan',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id_cat'   => '1',
                'category_name' => 'Sumber Daya Manusia',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id_cat'   => '1',
                'category_name' => 'Kurikulum, Pembelajaran, dan Suasana Akademik',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id_cat'   => '1',
                'category_name' => 'Prasrana, Sarana, Sistem Informasi',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'user_id_cat'   => '1',
                'category_name' => 'Penelitian, Pelayanan/Pengabdian Kepada Masyarakat, dan Kerjasama',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
