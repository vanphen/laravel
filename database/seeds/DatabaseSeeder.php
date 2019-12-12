<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(users::class);
        $this->call(Phone::class);
        $this->call(Role::class);
        $this->call(User_Role::class);
    }
}
