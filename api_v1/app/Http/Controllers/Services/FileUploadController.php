<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public static function storeImage($image, $directory = "uploads")
    {
        return "storage/" . $image->store($directory, "public");
    }
}
