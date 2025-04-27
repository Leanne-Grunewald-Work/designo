<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadHelper
{
    public static function uploadImage(UploadedFile $image, string $folder = 'projects'): string
    {
        $filename   = Str::slug(pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . now()->format('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $folderPath = $folder . '/' . now()->format('Y/m');

        return $image->storeAs($folderPath, $filename, 'public');
    }
}
