<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userLoginController extends Controller
{
//    function userLogin () {
//        return view("userLogin", ["heading"=> "Please login your account here"]);
//    }
   function userdata(Request $request) {
    //    $username = $request -> username;
    //    $password = $request -> password;
        return $request;
   }
}
