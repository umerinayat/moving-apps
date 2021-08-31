<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageProcessingController extends Controller
{

    public function index()
    {
        return view("resize-image");
    }

    // Resize the image
    public function resize(Request $request)
    {
        $request->validate([
            'image' => 'required|string',
            'size' => 'integer',
        ]);

        $image = $request->input('image');
        $size = $request->input('size', 300);
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
                    
                    $scaledImage = imagescale($imageResource, $size);

                    imagepng($scaledImage, $savedImagePath);

                    imagedestroy($scaledImage);
                    imagedestroy($imageResource);

                    break;
                case 'jpeg':
                    $imageResource = imagecreatefromjpeg( $savedImagePath);
                    $scaledImage = imagescale($imageResource, $size);

                    imagepng($scaledImage, $savedImagePath);

                    imagedestroy($scaledImage);
                    imagedestroy($imageResource);
                    break;
                case 'jpg':
                    $imageResource = imagecreatefromjpeg( $savedImagePath);
                    $scaledImage = imagescale($imageResource, $size);

                    imagepng($scaledImage, $savedImagePath);

                    imagedestroy($scaledImage);
                    imagedestroy($imageResource);
                    break;
            }

           $scaledImageUrl = Storage::disk($disk)
            ->url( $imageName );

            return response()->json(['image_url' => $scaledImageUrl, 'image_name' => $imageName], 200);
          
        } catch (Exception $e) {
            // return $e->getMessage();
            return response()->json(['message' => 'Please upload correct image file OR try later'], 400);
        }
    }
}
