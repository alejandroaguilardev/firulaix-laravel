<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WarController extends Controller
{


    public function store(Request $request) {
        $name="";
        if($request->hasFile("image")){
            $image = $request->file("image");
            $name = time() . ".".$image->guessExtension();
            $this->imageSave($name, $request->file("image"));
            
            
            $cFile = curl_file_create($name);
            $fields = ['file'=> $cFile,
                        'pinataMetadata' => json_encode(["name"=>$name])
                        ]; // Parameter to be sent
        
             $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'https://api.pinata.cloud/pinning/pinFileToIPFS'); 
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            $headers = array(
                "pinata_api_key: 65fba8da9b8bfc731f10",
                "pinata_secret_api_key: 22686cc7069634db6af0195fe5eb9ae09ee562465e2436fdf9519246532295e1",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
            curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
            
            $response = curl_exec($curl); 
            curl_close($curl);
            $url = json_decode($response);
            
        }
        return response()->json(["url" => $url->IpfsHash], 200);
    }

    private function imageSave($name, $img){
        $filepath = $name;
         copy($img->getRealPath(), $filepath);
        $image = Image::make($filepath);
        $image->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->encode($img->guessExtension(), 60)->save($filepath);
    }
}
