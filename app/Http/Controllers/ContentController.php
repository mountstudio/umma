<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class ContentController extends Controller
{
    public function upload(Request $request)
    {
        $fileName = "";
        if ($logo = $request->file('file')) {
            $fileName = 'content_images/' . uniqid('tinymce_') . '.jpg';
            $image = ImageManagerStatic::make($logo);

            $image->stream('jpg', 40);

            Storage::disk('local')->put('public/' . $fileName, $image);
        }
        return response()->json([
            'location' => asset('storage/' . $fileName),
        ]);


    }
}
