<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadsController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'file' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            );
        Image::create([ 'image_path'=>request('file')->hashName()]);
        Storage::disk('public')->put('/images/',request('file')  );
        return redirect(route('home'));
    }
}
