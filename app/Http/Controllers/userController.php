<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function login()
    {
        return redirect("/home");
    }
    public function register(Request $req)
    {
        $fields = $req->validate(
            [
                "fname" => 'required',
                "lname" => 'required',
                "name" => 'required',
                "password" => "required",
                "email" => "required"
            ]
        );
        
        User::create($fields);

        return redirect("/");
    }
}
