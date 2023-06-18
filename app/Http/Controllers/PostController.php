<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PostController extends Controller
{
    public function posts()
    {
        $posts = Post::with('user')->get();

        return Inertia::render('Test/Post', [
            'posts' => $posts
        ]);
    }

    public function postCreate(Request $request)
    {

        $user = Auth::user();

        Post::create([
            'user_id' => $user->id,
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->back();
    }
}
