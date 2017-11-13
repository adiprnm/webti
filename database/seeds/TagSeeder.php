<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tag::insert([
            [
                'tag_name' => 'Pengumuman',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Berita',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Lomba',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Workshop',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Magang',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Event',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'tag_name' => 'Seminar',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
