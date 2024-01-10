<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CuacaController extends Controller
{
    public function index()
    {
        // Parameter & API Key
        $apiKey = '38c8adf55febdffb1bdb404fdd958196';
        $lat = -6.2146;
        $lon = 106.8451;
        $cnt = 5;

        // Memanggil API
        $response = Http::get("http://api.openweathermap.org/data/2.5/forecast?lat={$lat}&lon={$lon}&appid={$apiKey}&units=metric");

        // Ambil data ramalan cuaca
        $weatherData = $response->json();

        // Filter data cuaca untuk satu data per hari
        $weatherForecasts = [];
        $processedDates = [];
        foreach ($weatherData['list'] as $forecast) {
            $date = date('Y-m-d', $forecast['dt']);

            // Jika data untuk hari ini belum diproses, tambahkan ke hasil
            if (!in_array($date, $processedDates)) {
                $weatherForecasts[] = [
                    'date' => strftime('%a, %d %b %Y', $forecast['dt']),
                    'temperature' => $forecast['main']['temp']
                ];

                $processedDates[] = $date; //Menandai data yang sudah diproses
            }
        }

        return view('cuaca', compact('weatherForecasts'));
    }
}
