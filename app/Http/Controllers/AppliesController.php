<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedUser;
use App\Models\Post;


class AppliesController extends Controller
{
    //GET POSTS WHERE USER HAS APPLIED
    public function index(){
        $appliedPosts = AppliedUser::where('user_id', '=', auth()->user()->id)->get();
        foreach($appliedPosts as $post){
            $postIds[] = $post->post_id;
        }
        if(!empty($postIds)){
            $posts = Post::find($postIds);
        }else{
            $posts = [];
        }
        return view('pages.myapplied', [
            'posts' => $posts,
        ]);
    }


}
