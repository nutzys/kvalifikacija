<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function newPosts(){
        $posts = Post::where('is_verified', 0)->get();
        return view('admin.newposts', [
            'posts' => $posts
        ]);
    }

    public function accept($id){
        $post = Post::find($id);
        $post->is_verified = 1;
        $post->save();
        return redirect()->back();
    }

    public function reports(){
        return view('admin.reports', [
            'reports' => Post::all()->where('is_reported', 1)
        ]);
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function destroyNewPost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
