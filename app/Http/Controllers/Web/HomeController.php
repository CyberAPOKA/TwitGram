<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome');
    }
}
