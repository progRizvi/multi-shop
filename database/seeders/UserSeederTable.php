<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "first_name" => "Rizvi",
            "last_name" => "Ahmed",
            "user_name" => "rizvi1316",
            "email" => "admin@gmail.com",
            "role" => "admin",
            "password" => bcrypt("rizvi"),
            "gender" => "male",
        ]);
    }
}