<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('/test/milan');
//     // return view('welcome');
// });

// // Router::get('/testing/testcase', function($textcase) {
// //     return view('testing', ["testing"=>$textcase]);
// // });

// Route::get('/test/{name}', function ($name) {
//     return view('test',["name"=>$name]);
// });

// // Route::get('user/{id}', [UserController::class,'show']);
// Route::get('user/{id}', [UserController::class,'User']);

// Route::get("/testingComponent", [UserController::class,'testingFunction'])->middleware('ageCheck');


// Route::view("userLogin","userLogin");
// Route::post("/login", [userLoginController::class, "userdata"]);

// Route::view("/noAccess","noAccessGlobal");

// Route::group(["middleware"=>["AgeCheck"]], function() {
//     Route::view("userLogin","userLogin");
// });

// Route::get("/allUserData", [UserController::class, "getUserData"]);

Route::get("/fileUpload", 'UserController@fileUpload');
Route::post("/fileUpload", 'UserController@filePostUpload');