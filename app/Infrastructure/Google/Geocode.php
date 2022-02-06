<?php

namespace App\Infrastructure\Google;

use \GuzzleHttp\Client;

/**
 * googleの位置情報取得サービスに関するクラス
 */
class Geocode
{
    /**
     * 位置情報の取得
     * 
     * @param string $address
     * 
     * @return array {
     *   lat: string,
     *   lng: string
     * }
     */
    public function fetchLocation(string $address) :array
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'https://maps.googleapis.com/maps/api/geocode/json',
            [
                'query' => [
                    'address' => $address,
                    'key' => env('GOOGLE_API_KEY')
                ]
            ]
        );
        $array = json_decode($response->getBody(), true);
        return $array['results'][0]['geometry']['location'] ?? ['lat' => '', 'lng' => ''];
    }
}