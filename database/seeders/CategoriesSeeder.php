<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                "id" => 1,
                "name" => "سیاسی",
            ]
        ]);

        DB::table("categories")->insert([
            [
                "id" => 2,
                "name" => "اقتصادی",
            ]
        ]);

        DB::table("categories")->insert([
            [
                "id" => 3,
                "name" => "جامعه",
            ]
        ]);

        DB::table("categories")->insert([
            [
                "id" => 4,
                "name" => "ورزشی",
            ]
        ]);

        DB::table("categories")->insert([
            [
                "id" => 5,
                "name" => "بین الملل",
            ]
        ]);
    }
}
