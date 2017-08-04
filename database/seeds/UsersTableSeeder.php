<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "mick",
            "email" => "mick@ezequote.com.au",
            "password" => bcrypt("password"),
            "remember_token" => null
        ]);
    }
}
