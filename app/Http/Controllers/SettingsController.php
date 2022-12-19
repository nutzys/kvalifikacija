<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SettingsController extends Controller
{
    public function index(){
        return view('pages.settings');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'bio' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->update($fields);
        $userid = auth()->user()->id;
        return redirect('/profile' . '/' . $userid);
    }
}
