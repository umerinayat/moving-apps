<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageProcessingController extends Controller
{
    // Resize the image
    public function resize(Request $request)
    {
        $request->validate([
            'image' => 'required|string',
            'width' => 'integer',
            'height' => 'integer'
        ]);

        $image = $request->input('image');
        $width = $request->input('width', 300);
        $height = $request->input('height', 300);

        $disk = config('filesystems.default');

        try {
            $mimeType = explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            $imageName = time() . '.' . $mimeType;

            $imageFile = \Image::make($request->image);

            Storage::disk($disk)
                    ->put( $imageName , (string) $imageFile->encode() );

            $imageResource = null;

            $savedImagePath = storage_path('app/public/') . $imageName;

            switch ($mimeType) {
                case 'png':
                    
                    $imageResource = imagecreatefrompng(  $savedImagePath );
                    
                    $scaledImage = imagescale($imageResource, 300);

                    imagepng($scaledImage, $savedImagePath);

                    imagedestroy($scaledImage);
                    imagedestroy($imageResource);

                    break;
                case 'jpeg':
                    $imageResource = imagecreatefromjpeg( $savedImagePath);
                    break;
                case 'jpg':
                    $imageResource = imagecreatefromjpeg( $savedImagePath);
                    break;
            }
          
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
