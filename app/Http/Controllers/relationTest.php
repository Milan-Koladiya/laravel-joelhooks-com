<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Blog;
use App\Post;

class relationTest extends Controller
{
    function getUserWithPost() {
        return User::find(1)->post;
    }

    function getUserWithBlog() {
        return User::find(1)->Blog;
    }
}
