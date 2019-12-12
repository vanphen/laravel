<?php

use Illuminate\Database\Seeder;

class Phone extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25 ;$i++) {
            DB::table('phones')->insert([
                'number' =>  $this->random_name("0973475521 0906493126 0387221749 0349840732 0384771747 0934708221 0384453826 0986514978	 0905951250 0387221749"),
                'user_id' => rand(0,25),
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
