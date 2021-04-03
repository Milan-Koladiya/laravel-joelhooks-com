<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    function getUserData() {
        $allUser = User::all();
        // $ssss = new Object( "user",$allUser )
        return $allUser;
    }
    function fileUpload() {
        return view("fileUpload");
    }
    function filePostUpload(Request $req) {
        echo 'Username : ',$req->input('username');
        echo '<br>'; 

        $file = $req->file('userAvter');
        if($file){
            echo 'File Name: '.$file->getClientOriginalName();
    
                //Display File Name
            echo 'File Name: '.$file->getClientOriginalName();
            echo '<br>';
        
            //Display File Extension
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo '<br>';
        
            //Display File Real Path
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';
        
            //Display File Size
            echo 'File Size: '.$file->getSize();
            echo '<br>';
        
            //Display File Mime Type
            echo 'File Mime Type: '.$file->getMimeType();
        
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
        }
    }
}

