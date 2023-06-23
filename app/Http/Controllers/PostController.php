<?php

namespace App\Http\Controllers;

use App\Events\PostEvent;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Event;

class PostController extends Controller
{
    public function posts()
    {

        $user = Auth::user();
        $posts = Post::with('user')->get();

        return Inertia::render('Test/Post', [
            'user' => $user,
            'posts' => $posts
        ]);
    }

    public function postCreate(Request $request)
    {

        $user = Auth::user();

        $post = Post::create([
            'user_id' => $user->id,
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        event(new PostEvent($post));

        return redirect()->back();
    }
}
