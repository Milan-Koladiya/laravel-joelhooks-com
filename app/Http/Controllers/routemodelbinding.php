<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class routemodelbinding extends Controller
{
    public function fetchDataUsingRoute(User $email) {
        return $email;
    }
}
