<?php

namespace App\Service;

use Guzzlehttp\Client;

class WeatherService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('OPENWEATHERMAP_API_KEY');
        $this->baseUrl = 'https://api.openweathermap.org/data/2.5';
    }

    public function getCurrentWeather($city)
    {
        $response = $this->client->get("{$this->baseUrl}/weather?q={$city}&appid={$this->apiKey}");
        return json_decode($response->getBody()->getContents(), true);
    }
}