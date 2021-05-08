<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class authenticationRoute extends Controller
{
    function sampleRoute() {
        return ["statuscode"=> 200, "success"=> "Auth route success"];
    }

    function login(Request $req) {
        try {
            $userCheck = User::where('email', $req->email)->first();
            if(!$userCheck || !Hash::check($req->password, $userCheck->password)) {
                abort(404, "Invalidate credirials");
            }
            $token = $userCheck -> createToken("Secret key")->plainTextToken;

            $response =  [
                "User"=> $userCheck,
                "Token"=> $token
            ];
            return response($response,200);
        } catch (\Throwable $th) {
            return ["statusCode"=> 400, "error"=> $th->getMessage()];
        }
    }

    function register(Request  $req) {
        try {
            $userValidate = $req->validate([
                "name"=> "required",
                "email"=> "required",
                "password"=> "required"
            ]);

            $usercreate = new User();
    
            $usercreate->name = $req->name;
            $usercreate->email = $req->email;
            $usercreate->password = Hash::make($req->password);
    
            $userSave = $usercreate->save();
            if ($userSave) {
                return ["statuscode"=> 200, "success"=> "Auth route success"];
            } 

        } catch (\Throwable $th) {
            //throw $th;
            return ["statuscode"=> 400, "error"=> $th->getMessage()];
        }


    }
}
