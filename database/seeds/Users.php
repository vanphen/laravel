<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25 ;$i++) {
            DB::table('users')->insert([
                'name' =>  $this->random_username("pham hong thanh thao phen trung vu minh manh ha"),
                'class' => $this->random_class("58pm 59pm 57pm 58ht 60th3 59pm"),
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),

            ]);
        }
    }
    function random_username($string) {
        $pattern = explode(" ", $string);
        return $pattern[array_rand($pattern)]." ".$pattern[array_rand($pattern)];
    }
    function random_class($string) {
        $pattern = explode(" ", $string);
        return $pattern[array_rand($pattern)];
    }
}
