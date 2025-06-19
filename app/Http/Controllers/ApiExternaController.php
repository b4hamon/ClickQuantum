<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiExternaController extends Controller
{
    public function obtenerDatosNasa()
    {
        $url = "https://api.nasa.gov/planetary/apod?api_key={$apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'No se encontraron los datos de la API'], 500);
    }
}
