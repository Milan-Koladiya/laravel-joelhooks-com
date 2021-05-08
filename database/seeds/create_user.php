<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\User;

class create_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('create_user'::class);
        for($i=1; $i<=10; $i++) {
            DB::table('users')->insert([
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'password'=>Hash::make('password'),
            ]);
        }
        // User::factory()
        //     ->count(10)
        //     ->create();
    }   
}
