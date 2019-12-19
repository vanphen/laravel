<?php

use Illuminate\Database\Seeder;

class post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' =>  'Phim của Son Ye Jin và Hyun Bin hút khán giả',
            'content' => 'Đại úy Ri Jung Hyuk (Hyun Bin) nghi ngờ Yoon Se Ri (Son Ye Jin) là gián điệp khi bắt gặp cô trong khu quân sự Triều Tiên.',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
