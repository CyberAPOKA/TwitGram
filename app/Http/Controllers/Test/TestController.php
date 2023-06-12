<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\Test\TestRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;
use GuzzleHttp\Client;

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

    public function nasaApi()
    {
        $client = new Client();

        $url = 'https://api.nasa.gov/planetary/apod';
        $key = env('API_KEY');

        try {
            $response = $client->request('GET', $url, [
                'verify' => public_path('cacert.pem'),
                'query' => [
                    'api_key' => $key
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            // dd($data);

            return Inertia::render('Test/NasaApi', [
                'apod' => $data
            ]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->getCode() === 502) {
                // No dia 07/06/2023 a API da NASA estava fora do ar, então adicionei essa verificação
                // Estava retornando o erro Server error: `GET https://api.nasa.gov/planetary/apod?api_key=Mn5upJMa1tZjwv5Y53CdTIROex2TWlzo1zZwORNX` resulted in a `502 Bad Gateway`
                // API da NASA está fora do ar
                $errorMessage = 'Desculpe, a API da NASA está temporariamente indisponível. Por favor, tente novamente mais tarde.';

                return Inertia::render('Test/NasaApi', [
                    'message' => $errorMessage
                ]);
            }
            //Algum outro erro desconhecido.

            $errorMessage = 'Ocorreu um erro ao acessar a API da NASA.';

            return Inertia::render('Test/NasaApi', [
                'message' => $errorMessage
            ]);
        }
    }

    public function carousel()
    {
        return Inertia::render('Test/Carousel');
    }
}
