<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
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
}
