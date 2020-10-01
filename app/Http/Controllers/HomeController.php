<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all()->load('tags');
        $tags = Tag::all();

        return view('home', compact('posts', 'tags'));
    }

    public function adminHome() {
        $postsPending = Post::with('user')->where('status', config('home.pending_status'))->get();

        return view('admin.pendingPosts', compact('postsPending'));
    }
}
