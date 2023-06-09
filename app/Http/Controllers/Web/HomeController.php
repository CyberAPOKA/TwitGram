<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user()->load('profile');

        return Inertia::render('Welcome', [
            'user' => $user
        ]);
    }

    public function user($user)
    {
        $user = User::where('user', $user)->first();

        if (!$user) {
            abort(404);
        }

        // if (!$user) {

        //     $message = "Usuário não existe!";

        //     return Inertia::render('User', [
        //         'message' => $message
        //     ]);
        // }

        return Inertia::render('User', [
            'user' => $user
        ]);
    }
}
