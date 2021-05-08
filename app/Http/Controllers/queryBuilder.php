<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryBuilder extends Controller
{
    function queryBuilder() {
        // Get all data
        // $user = DB::table('users')->get();

        // Get first record
        // $user = (array)DB::table('users')->where('status', 'inactive')->first();
        
        // Get all record with where condition
        // $user = DB::table('users')->where('status', 'inactive')->get();
        
        // Regex in where caluse
        // $user = DB::table('users')->where('email', 'REGEXP', ^.*test.*$)->get();
        
        // $user = DB::table('users')->pluck('email', "firstName");

        // $user = DB::table('users')->orderBy('createdAt')->chunk(10, function($users) {
        //     foreach($users as $userSingle) {
        //         return $userSingle;
        //     }
        // });

        // $user = DB::table('users')->orderBy('createdAt')->get();

        // $user = DB::table('users')->select("firstName", "lastName as last_name", "email")->get();

        $user = DB::table('users')->distinct()->get()->count();

        // $user = DB::table('users')->select(DB::raw());

        return $user;
    }
}