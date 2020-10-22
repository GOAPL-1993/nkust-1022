<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadedImage;
use Illuminate\Support\Facades\Redis;

class UploadImageController extends Controller
{
    //
    public function index()
    {
        $images = UploadedImage::all();
        return view("uploadindex", compact('images'));
    }
    public function upload(Request $request)
    {
        $path = $request->file('fileToUpload')->store('public');//把上傳的圖片存在storage/app/public
        UploadedImage::insert(["filename"=>basename($path)]);
        return redirect("/");
    }
}
