<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedUser;

class AppliesController extends Controller
{
    //GET POSTS WHERE USER HAS APPLIED
    public function index(){
        return view('pages.myapplied', [
            'posts' => AppliedUser::with('post')->where('user_id', '=', auth()->id())->get()
        ]);
    }


}
