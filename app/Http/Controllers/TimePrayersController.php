<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class TimePrayersController extends Controller
{
    public function prayerForToday()
    {
        $client = new Client();
        $array_city = [
            'bishkek'=>'1538652/bishkek/',
            'osh'=>'1346798/osh/',
            'jalal-abad'=>'1529778/jalal-abad/',
            'cholpon-ata'=>'1528260/cholpon-ata/',
            'naryn'=>'1527590/naryn/',
            'talas'=>'1527297/talas/',
            'batken'=>'1463580/batken/'
        ];
        $array_city_time = array();
        foreach ($array_city as $key => $city){

            $crawler = $client->request('GET', "http://xn--80aavsd.xn--p1acf/geo/kg/{$city}");
            $timePrayer = $crawler->filter('span.h5')->each(function ($node)
            {
                return $node->text();
            });
            $array_city_time[$key] = $timePrayer;
        }
        return json_encode($array_city_time);
    }


}
