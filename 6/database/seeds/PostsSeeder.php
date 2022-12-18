<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            "user_id" => "6",
            'body' => '赤',
        ]);

        DB::table('posts')->insert([
            "user_id" => "6",
            'body' => 'ポッポ',
        ]);

        DB::table('posts')->insert([
            "user_id" => "6",
            'body' => '赤',
        ]);

        DB::table('posts')->insert([
            "user_id" => "7",
            'body' => 'ギャラドス',
        ]);

        DB::table('posts')->insert([
            "user_id" => "8",
            'body' => 'ホゲた',
        ]);
    }
}
