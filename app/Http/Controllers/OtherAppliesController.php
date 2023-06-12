<?php

namespace App\Http\Controllers;

use App\Models\AppliedUser;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OtherAppliesController extends Controller
{
    //KAS UZERIM PIETEIKUSIES
    public function index(){        
        //get users posts id   
        $postIds = [];
        $posts = Post::where('user_id', '=', auth()->user()->id)->get();
        foreach($posts as $post){
            $postIds[] = $post->id;
        }
        
        $applied = AppliedUser::where('post_id', '=', $postIds)->get();
        foreach($applied as $apUser){
            $appliedIds[] = $apUser->user_id;
        }
        if(!empty($appliedIds)){
            $users = User::find($appliedIds);
        }else{
            $users = [];
        }
        return view('pages.applied', [
            'users' => $users,
            'posts' => $posts,
        ]);
    }
}
