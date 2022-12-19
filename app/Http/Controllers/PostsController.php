<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\AppliedUser;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{ 
    public function index(){
        return view('posts.index', [
            'post_count' => Post::count(),
            'user_count' => User::count()
        ]);
    }

    public function all(){
        return view('posts.all', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post){

        return view('posts.show', [
            'post' => $post,
            'user' => User::find($post->user_id)
        ]);
    }

    //Load create page
    public function create(){
        return view('posts.create',[
            'location' => Location::all(),
            'type' => Type::all()
        ]);
    }

    //Store new post
    public function store(Request $request){ 
        $fields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'location_id' => 'required',
            'price' => ' '
        ]);
        $fields['user_id'] = auth()->id();
        Post::create($fields);
        
        //Update post count
        $user = User::find(auth()->user()->id);
        $user->post_count = Post::where('user_id', auth()->id())->count();
        $user->save();
        return redirect('/posts');
    }

    public function apply(Post $post){
        $applied_data = [
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ];

        AppliedUser::create($applied_data);
        return redirect('/posts');
    }

    //Load edit page
    public function edit(Post $post){
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    //Update edit page data
    public function update(Request $request, Post $post){
        $fields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user' => 'required'
        ]);

        $post->update($fields);
        return redirect('/');
    }

    //Delete post
    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}
