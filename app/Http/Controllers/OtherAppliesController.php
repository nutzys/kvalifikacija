<?php

namespace App\Http\Controllers;

use App\Models\AppliedUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OtherAppliesController extends Controller
{

    public function index(){
        $posts = Post::where('user_id', auth()->user()->id)->get();
        $post_ids= [];
        foreach($posts as $post){
            $post_ids[] = $post->id;
        }
        $appliedUserIds = [];
        foreach($post_ids as $post_id){
            $appliedUserIds[] = AppliedUser::where('post_id', $post_id)->get();
        }
        $users = [];
        foreach($appliedUserIds as $user){
            foreach($user as $u){
                $users[] = User::where('id', $u->user_id)->get();
            }
        }
        return view('pages.applied',[
            'users' => $users
        ]);
    }
}
