<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts'=>Post::latest()->paginate()
        ]);

    }
    public function store(Request $request)
    {
        $request->validate(['body'=>'required']);

        //dd($request->only('body'));
        //dd($request->body);
        //dd(['body'=>$request->body]);

        $request->user()->posts()->create($request->only('body'));

        return back()->with('status', 'Publicación guardada exitosamente');

    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
