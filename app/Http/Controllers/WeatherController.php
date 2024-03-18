<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class WeatherController extends Controller
{
    public function showWeather()
    {
        $city = 'default'; 
        return view('students.weather', compact('city'));
    }
    public function getWeather(Request $request, $city)
    {
        $apiKey = env('OPENWEATHERMAP_API_KEY');
        $city= $request->input('city');
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";
        
        $client = new Client();
        $response = $client->request('GET', $url);
        
        $weather = json_decode($response->getBody(), true);
        
        return view('students.weather', compact('weather', 'city'));
    }
}