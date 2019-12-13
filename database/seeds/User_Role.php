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
        for ($i=1; $i<26 ;$i++) {
            if (rand(0,1) == 1) {
                DB::table('user_role')->insert([
                    'user_id' =>  $i,
                    'role_id' =>  26,
                    'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]);
            }
            if (rand(0,1) == 1) {
                DB::table('user_role')->insert([
                    'user_id' =>  $i,
                    'role_id' =>  27,
                    'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]);
            }
            if (rand(0,1) == 1) {
                DB::table('user_role')->insert([
                    'user_id' =>  $i,
                    'role_id' =>  28,
                    'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]);
            }
            if (rand(0,1) == 1) {
                DB::table('user_role')->insert([
                    'user_id' =>  $i,
                    'role_id' =>  29,
                    'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                    'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
                ]);
            }
        }
    }
}
