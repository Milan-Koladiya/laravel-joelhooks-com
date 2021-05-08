<?php
/* All API route && in channels.php all the channel route */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIdevelopment;
use App\Http\Controllers\authenticationRoute;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(["middleware => ['auth:sanctum']"], function() {
// }); 

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get("/authRoute", "authenticationRoute@sampleRoute");
});

Route::post("/login", "authenticationRoute@login");
Route::post("/register", "authenticationRoute@register");

Route::get("/getUser/{id}", "APIdevelopment@getUserById");
Route::post("/updateUserById", "APIdevelopment@updateUserById");
Route::post("/addUser", "APIdevelopment@addUser");
