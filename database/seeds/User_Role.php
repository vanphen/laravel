<?php

use Illuminate\Database\Seeder;

class User_Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<25 ;$i++) {
            DB::table('user_role')->insert([
                'user_id' =>  rand(0,25),
                'role_id' =>  rand(0,25),
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ]);
        }
    }
}
