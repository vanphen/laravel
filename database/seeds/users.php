<?php

use Illuminate\Database\Seeder;

class users extends Seeder
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
                'first_name' =>  $this->random_name("thanh hong thai tai luan manh phen huy hoang tuan"),
                'last_name' => $this->random_name("nguyen luu pham tran bui le"),
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
