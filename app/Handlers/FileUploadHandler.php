<?php

namespace App\Handlers;

use Illuminate\Http\UploadedFile;

class FileUploadHandler
{
    public static function upload(UploadedFile $file): string
    {
        $filename = time() . '.pdf';
        $file->move(public_path('uploads'), $filename);

        return config('app.url') . "/uploads/$filename";
    }
}
