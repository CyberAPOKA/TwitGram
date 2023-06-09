<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use function Monolog\error;
use App\Models\UserFile;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = auth('admin')->user();

        return Inertia::render('Admin/Dashboard', [
            'admin' => $admin
        ]);
    }

    public function getUsers(Request $request)
    {
        $users = User::with('profile')
            ->when($request->email, function ($query, $email) {
                return $query->where('email', 'LIKE', '%' . $email . '%');
            })
            ->when($request->name, function ($query, $name) {
                return $query->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
                    ->where('user_profiles.name', 'LIKE', '%' . $name . '%');
            })
            ->orderBy('users.id')
            ->paginate(10);

        return [
            'users' => $users
        ];
    }
}
