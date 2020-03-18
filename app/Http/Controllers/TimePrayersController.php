<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class TimePrayersController extends Controller
{
    public function prayerForToday()
    {
        $cities = [
            'bishkek' => '1538652/bishkek/',
            'ik' => '1528260/cholpon-ata/',
            'talas' => '1527297/talas/',
            'naryn' => '1527590/naryn/',
            'ja' => '1529778/jalal-abad/',
            'osh' => '1346798/osh/',
            'batken' => '1463580/batken/'
        ];
        $client = new Client();
        $array_city_time = array();
        foreach ($cities as $key => $city) {
            $crawler = $client->request('GET', "http://xn--80aavsd.xn--p1acf/geo/kg/{$city}");
            $timePrayer = $crawler->filter('span.h5')->each(function ($node) {
                return $node->text();
            });
            $array_city_time[$key] = $timePrayer;
        }
        return json_encode($array_city_time);
    }

    public function prayerForMonthly()
    {
        $cities = [
            'bishkek' => '/1528675/',
            'ik' => '/1528512/',
            'talas' => '/1527299/',
            'naryn' => '/1527592/',
            'ja' => '/1528249/',
            'osh' => '/1527534/',
            'batken' => '/1528735/'
        ];
        $client = new Client();
        $table = array();
        foreach ($cities as $key => $part_url) {
            $crawler = $client->request('GET',
                'http://xn--80aavsd.xn--p1acf/monthly/'
                . date('F') //возвращает какой месяц парсить
                . $part_url);       //часть url для определения для какого города парсить
            $time_namaz = $crawler->filter('time')->each(function ($node) {
                return $node->text();
            });
            $counter_type = 0;
            $raw_table = array(array());
            $counter_day = 0;
            for ($i = 0; $i < count($time_namaz); $i++) {
                if ($counter_type == 6) {
                    $counter_day++;
                    $counter_type = 0;
                }
                $raw_table[strval($counter_day)][$counter_type] = $time_namaz[$i];
                $counter_type++;
            }
            $table[$key] = $raw_table;
        }
        $cities = [
            'Бишкек',
            'Иссык-куль',
            'Талас',
            'Нарын',
            'Джалал-абад',
            'Ош',
            'Баткен'
        ];

        return view('prayer_time',
            [
                'table' => $table,
                'cities' => $cities,
            ]);
    }
}
