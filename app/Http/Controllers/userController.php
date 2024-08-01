<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class userController extends Controller
{
    public function login()
    {
        $data = request()->validate(
            [
                "name" => 'required',
                "password" => ['required'],
            ]
        );
        
        if(Auth::attempt($data))
        {
            request()->session()->regenerate();
            return redirect("/home");
        }
        else
        {
            throw ValidationException::withMessages([
                'password' => 'Opps, authentication did not match!'
            ]);
        }
        
    }
    
    public function register()
    {
        $data = request()->validate(
            [
                "fname" => 'required',
                "lname" => 'required',
                "name" => 'required',
                "password" => ['required','confirmed'],
                "email" => ['required','email','unique:'.User::class.',email'],
            ]
        );

        $user = User::factory()->create($data);

        Auth::login($user);
        
        return redirect("/home");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
        ////
    }
}
