<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function imageSave($name, $img){
        $filepath = $name;
         copy($img->getRealPath(), $filepath);
        $image = Image::make($filepath);
        $image->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode($img->guessExtension(), 60)->save($filepath);
    }

    
    public function recaptcha($captcha)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $secretkey = "6LeBltsdAAAAAOoSGmBMBlIE5LMR8DvvTV8FvP9A";
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip"));
        return  $response->success;
    }
}
