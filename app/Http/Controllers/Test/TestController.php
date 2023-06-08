<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\TestRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function dataTable()
    {
        return Inertia::render('Test/DataTable');
    }

    public function darkMode()
    {
        return Inertia::render('Test/DarkMode');
    }

    public function daisyui()
    {
        return Inertia::render('Test/Daisyui');
    }

    public function precognition()
    {
        return Inertia::render('Test/Precognition');
    }

    public function precognitionPost(TestRequest $request)
    {
        // $payload = precognition(function ($bail) use ($request) {
        //     return $request->validated();
        // });

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }
}
