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

            return Inertia::render('Welcome', [
                'apod' => $data
            ]);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            if ($e->getCode() === 502) {
                // No dia 07/06/2023 a API da NASA estava fora do ar, então adicionei essa verificação
                // Estava retornando o erro Server error: `GET https://api.nasa.gov/planetary/apod?api_key=Mn5upJMa1tZjwv5Y53CdTIROex2TWlzo1zZwORNX` resulted in a `502 Bad Gateway`
                // API da NASA está fora do ar
                $errorMessage = 'Desculpe, a API da NASA está temporariamente indisponível. Por favor, tente novamente mais tarde.';

                return Inertia::render('Welcome', [
                    'message' => $errorMessage
                ]);
            }
            //Algum outro erro desconhecido.

            $errorMessage = 'Ocorreu um erro ao acessar a API da NASA.';

            return Inertia::render('Welcome', [
                'message' => $errorMessage
            ]);
        }
    }
}
