<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Post;
use App\Models\Type;
use App\Models\User;
use App\Models\AppliedUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{ 
    public function index(){
        return view('posts.index', [
            'post_count' => Post::count(),
            'user_count' => User::count()
            ]);
    }

    public function all(){
        if(Auth::check()){
            $user = User::find(auth()->user()->id);
        }
        return view('posts.all', [
            'posts' => Post::all()->where('is_verified', 1),
            'user' => !empty($user) ? $user : ''
        ]);
    }

    public function show(Post $post){
        $post->incrementViewCount();
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
        $post = Post::find($post->id);
        $post->applied_count = $post->applied_count + 1;
        $post->save();
        AppliedUser::create($applied_data);
        return redirect('/posts');
    }

    public function report(Post $post){
        $post = Post::find($post->id);
        $post->is_reported = 1;
        $post->save();
        return redirect()->back();
    }
}
