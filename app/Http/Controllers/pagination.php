<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class pagination extends Controller
{
    function paginate () {
        $user = User::paginate(7);
        return view('pagination', ["users"=>$user]);
    }
}
