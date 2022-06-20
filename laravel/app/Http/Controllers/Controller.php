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
}
