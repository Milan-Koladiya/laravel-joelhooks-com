<?php

use Illuminate\Database\Seeder;

class create_blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title'=>Str::random(10),
            'body'=>Str::random(20),
            'user_id'=>1
        ]);
    }
}
