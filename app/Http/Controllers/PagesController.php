<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function profile(User $user){ 
        return view('pages.profile', [
            'user' => User::find($user->id)
        ]);
    }
}
