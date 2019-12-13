<?php

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25 ;$i++) {
            DB::table('roles')->insert([
                'name' =>  $this->random_name("mess call chat video"),
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ]);
        }
    }
    function random_name($string) {
        $pattern = explode(" ", $string);
        return $pattern[array_rand($pattern)];
    }
}
