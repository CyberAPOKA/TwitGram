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

    public function user($id)
    {
        $user = User::with('profile', 'address', 'file')->findOrFail($id);
        $files = $user->file;

        return Inertia::render(
            'Admin/User',
            [
                'user' => $user,
                'files' => $files
            ]
        );
    }

    public function downloadFile($user_id, $file_path, $file_original_name)
    {
        $path = storage_path('app/curriculums/' . $user_id . '/' . $file_path);

        if (file_exists($path)) {
            return response()->download($path, $file_original_name);
        } else {
            return abort(404, 'File not found');
        }
    }

    public function downloadAllFiles($userId)
    {
        $user = User::findOrFail($userId);
        $userProfile = $user->profile;

        $zip = new ZipArchive();
        $filename = 'Arquivos de ' . $userProfile->name . '.zip';

        if ($zip->open($filename, ZipArchive::CREATE) !== TRUE) {
            exit("Não foi possível abrir o arquivo ZIP");
        }

        $files = UserFile::where('user_id', $userId)->get();
        $count = 1;

        foreach ($files as $file) {
            $filePath = storage_path('app/' . $file->file_path);
            $name = $file->name;

            while ($zip->locateName($name) !== false) {
                $name = pathinfo($file->name, PATHINFO_FILENAME) . ' (' . $count . ').' . pathinfo($file->name, PATHINFO_EXTENSION);
                $count++;
            }

            $zip->addFile($filePath, $name);
        }

        $zip->close();

        return response()->download($filename)->deleteFileAfterSend(true);
    }

    public function processes()
    {
        $admin = auth('admin')->user();

        return Inertia::render('Admin/Processes', [
            'admin' => $admin
        ]);
    }

    public function processCreate(Request $request)
    {
        $admin = auth('admin')->user();

        Process::create([
            'name' => $request->input('name'),
            'group' => $admin->type,
            'initial_date' => $request->input('initial_date'),
            'final_date' => $request->input('final_date'),
            'result_date' => $request->input('result_date')
        ]);
    }

    public function userUpdate(Request $request, $id)
    {
        // dd($request, $id);
        try {
            $user = User::findOrFail($id);

            $user->update([
                'email' => $request->input('email')
            ]);

            $user->profile->update([
                'name' => $request->input('name')
            ]);

            return response()->json(['message' => 'Usuário atualizado com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao atualizar usuário: ' . $e->getMessage()], 500);
        }
    }
}
