<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class APIdevelopment extends Controller
{
    function getUserById($id) {
        $userData=User::where("id",$id)->get();
        return ["Data"=>$userData];
    }

    function updateUserById(Request $req){
        try {
            // https://stackoverflow.com/questions/58871736/error-method-illuminate-database-eloquent-collectionsave-does-not-exist-in
            $userData = User::where("id",$req->id)->first();
            $userData->email=$req->email;
            $success = $userData->save();
            return ["Success"=>$success];
        } 
        catch(\Exception $e) {
            return ["Error"=>$e->getMessage()];
        }
    }

    function addUser(Request $req){
        try {
            $userExits = User::where("email", $req->email)->first();
            if($userExits) {
                abort(404, "Email is already exits");
            }; 
            $customeMessage = [
                'name.required'=>'Name is required',
                'email.required'=>'email is required',
                'password.required'=>'password is required',
            ];
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:5',
            ];
            $this->validate($req, $rules, $customeMessage);
            $userData = new User();
            $userData->name = $req->name;
            $userData->email = $req->email;
            $userData->password = $req->password;
            $userSave = $userData->save();
            if($userSave){
                return ["Success" => "Success"];
            }
        } catch(\Exception $e) {
            return ["Error"=>$e->getMessage()];
        }
    }
}
