<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ProductPhoto;

class ProductPhotoController extends Controller
{
    public function destroy(Request $request) {
        $photoName = $request->get('photoName');

        if(Storage::disk('public')->exists($photoName)) {
            Storage::disk('public')->delete($photoName);
        }

        $removePhoto = ProductPhoto::where('image', $photoName);
        $removePhoto->delete();

        return redirect()->back();
    }
}
