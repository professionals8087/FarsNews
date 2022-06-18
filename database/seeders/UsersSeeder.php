<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                "id" => 1,
                "name" => "mohammad",
                "email" => "mohamadrobatjazi1387@gmail.com",
                "password" => "mmm1387m"
            ],
        ]);

        DB::table("users")->insert([
            [
                "id" => 2,
                "name" => "fatemeh",
                "email" => "fatemeh@gmail.com",
                "password" => "123456"
            ],
        ]);

        DB::table("users")->insert([
            [
                "id" => 3,
                "name" => "ali",
                "email" => "ali@gmail.com",
                "password" => "1234"
            ],
        ]);
    }
}
