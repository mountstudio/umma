<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class TestController extends Controller
{
    public function index()
    {
        $client = new Client();
        $crawler = $client->request('GET','https://namaz.today/city/bishkek');

        $descriptions = $crawler->filter('span.text-center.rb')->each(function($node) {
            return $node->text();
        });
        array_splice($descriptions,1,1);
    }
}
