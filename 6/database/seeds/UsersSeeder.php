<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "id" => "6",
            "name" => "かえぼう",
            'email' => 'd@d',
            "password" => bcrypt("dddddddd"),
        ]);

        DB::table('users')->insert([
            "id" => "7",
            "name" => "かえぼ",
            'email' => 'e@e',
            "password" => bcrypt("eeeeeeee"),
        ]);

        DB::table('users')->insert([
            "id" => "8",
            "name" => "かえ",
            'email' => 'f@f',
            "password" => bcrypt("ffffffff"),
        ]);
    }
}
