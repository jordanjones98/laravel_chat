<?php

namespace App\Http\Controllers;

use App\Post; // <- makes it so we can use post model

use App\Mail\Welcome;

use Carbon\Carbon; // use Carbon

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except(['index', 'show']);
    }

    // Index Method handle /
    public function index() {

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    // handle posts/{id}
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    // handle posts/create
    public function create() {
        return view ('posts.create');
    }

    // Store posts in DB
    public function store() {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Save title, userId, and body in post table
        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        // Redirect to home page
        return redirect('/');

    }
}
