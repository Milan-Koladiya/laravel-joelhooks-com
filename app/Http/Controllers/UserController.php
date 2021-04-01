<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    function User($id) {
        echo "Hello from controller <br/>";
        echo "<h1>This is your parameter ${id}</h1>";
        return view("users", ["name"=>$id]);
    }
    function testingFunction() {
        $user = ["Milan","Piyush","Bhauik"];
        return view("user", ["user"=>$user]);
    }
}

