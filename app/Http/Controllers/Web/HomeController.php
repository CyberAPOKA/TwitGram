<?php

namespace App\Http\Controllers\Web;

use App\Events\PublicationEvent;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;

class HomeController extends Controller
{

    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function index()
    {
        $user = Auth::user()->load('profile', 'publications');

        $publications = Publication::with('user', 'photos')->get();

        return Inertia::render('Welcome', [
            'user' => $user,
            'publications' => $publications
        ]);
    }

    public function user($user)
    {
        $authUser = Auth::user()->load('publications.photos');

        if ($authUser && $authUser->user === $user) {
            $user = $authUser;
        } else {
            $user = User::where('user', $user)->with('publications.photos')->first();

            if (!$user) {
                abort(404);
            }
        }

        return Inertia::render('User', [
            'user' => $user
        ]);
    }

    public function createPublication(Request $request)
    {
        $user = Auth::user();

        $publication = Publication::create([
            'user_id' => $user->id,
            'title' => $request->input('title')
        ]);

        if ($request->hasFile('photos')) {
            $photos = $request->file('photos');

            foreach ($photos as $photo) {
                $photoPath = $photo->store('public/photos/' . $user->user . '/publication/' . $publication->id);
                $photoPath = str_replace('public/', '', $photoPath);
                Photo::create([
                    'publication_id' => $publication->id,
                    'photo_path' => $photoPath
                ]);
            }
        }

        event(new PublicationEvent($publication));

        return redirect()->back();
    }
}
