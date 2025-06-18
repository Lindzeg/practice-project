<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;


class LoginUserController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        //validate
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //attemt login user
        if(! Auth::attempt($validatedAttributes)){
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.',
                'password' => 'Sorry, those credentials do not match.',
            ]);
        }
        //regenerate session token
        request()->session()->regenerate();
        //redirect
        return redirect('/');
    }

    public function destroy(){
       Auth::logout();
       return redirect('/');
    }
}
