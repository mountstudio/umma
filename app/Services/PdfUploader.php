<?php


namespace App\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class PdfUploader
{
    public static function upload(UploadedFile $file, $dir, $prefix)
    {
        if (!file_exists(storage_path('app/public/pdf/'))) {
            mkdir(storage_path('app/public/pdf/'), 0777);
        }
        if (!file_exists(storage_path('app/public/pdf/' . $dir))) {
            mkdir(storage_path('app/public/pdf/' . $dir), 0777);
        }
        $filename = $dir . '/' . uniqid($prefix . '_') . '.' . mb_strtolower($file->getClientOriginalExtension());
        move_uploaded_file($file, storage_path('app/public/pdf/'.$filename));
        return $filename;
    }
}
