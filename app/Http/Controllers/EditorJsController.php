<?php

namespace App\Http\Controllers;

use App\Services\ImageUploader;
use Goutte\Client;
use Illuminate\Http\Request;

class EditorJsController extends Controller
{

    public function link(Client $crawl, Request $request)
    {
        $response = $crawl->request('GET', $request->request->get('url'));

        $status = $crawl->getResponse()->getStatusCode();


        if ($status == 200) {
            $title = trim($response->filter('title')->getNode(0)->textContent);
            $description = trim($response->filterXPath('//meta[@name="description"]')->attr('content'));

            return response()->json([
                'success' => 1,
                'meta' => [
                    'title' => $title,
                    'description' => $description,
                ]
            ]);
        }


    }

    public function image(Request $request)
    {
        $fileName = ImageUploader::upload($request->file('image'), 'post', 'post_');

        return response()->json([
            'success' => 1,
            'file' => [
                'url' => asset('storage/large/'.$fileName),
            ]
        ]);
    }

}
