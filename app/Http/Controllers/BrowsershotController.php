<?php

namespace App\Http\Controllers;

use App\Models\WebpageToImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class BrowsershotController extends Controller
{
    public function generateImageFromWebUrl(Request $request) 
    {
        $url = $request->input('url', 'https://www.google.com');

        try
        {   
            $disk = config('filesystems.default');
            $savedImg = time() . '_img.png';

            $img = Browsershot::url( $url )
                ->setNodeBinary('/root/.nvm/versions/node/v14.17.1/bin/')
                ->setNpmBinary('/root/.nvm/versions/node/v14.17.1/bin/')
                ->timeout(120)
                ->fullPage()
                ->screenshot();

            Storage::disk($disk)
            ->put($savedImg, $img);

            $savedImgUrl = Storage::disk($disk)->url($savedImg);

            WebpageToImage::create([
                'img_name' =>  $savedImg,
                'saved_img_url' => $savedImgUrl,
                'web_page_url' => $url
            ]);

            return [
                'success' => true,
                'view_url' => $savedImgUrl,
                'img_name' => $savedImg
            ];
        }
        catch(Exception $e)
        {

            dd($e);
            WebpageToImage::create([
                'web_page_url' => $url
            ]);
            
            return [
                'success' => false,
                'message' => 'Please Try Later! We are fixing the issue.'
            ];
        }
    }

    public function download($fileName)
    {
        $disk = config('filesystems.default');
        return  Storage::disk($disk)->download($fileName);
    }
}
