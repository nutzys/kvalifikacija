<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //Load register form
    public function register(){
        return view('users.register');
    }

    //Store registered user
    public function store(Request $request){
        
        $fields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => ['required_with:conf_password|min:6|same:conf_password|required'],
            'conf_password' => 'required',
            'phone' => ['required', 'unique:users']
        ]);
        $fields['password'] = bcrypt($fields['password']);
        User::create($fields);
        return redirect('/posts');
    }

    //Load login form
    public function authenticate(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($fields)){
            $request->session()->regenerate();

            return redirect('/posts');
        }

        return back()->withErrors(['email' => 'Nepareizs E-pasts/Parole']);
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}
