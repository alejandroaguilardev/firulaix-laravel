<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarController extends Controller
{

    private $endPoints = [
        "json" => 'https://api.pinata.cloud/pinning/pinJSONToIPFS',
        "image" => 'https://api.pinata.cloud/pinning/pinFileToIPFS',

    ];

    public function store(Request $request) {
        $name="";
        if($request->hasFile("image")){
            $image = $request->file("image");
            $name ="temp.".$image->guessExtension();
            $this->imageSave($name, $request->file("image"));
            
            
            $cFile = curl_file_create($name);
            $fields = ['file'=> $cFile,
                        'pinataMetadata' => json_encode(["name"=>time() . ".".$image->guessExtension()])
                    ]; // Parameter to be sent
        
            $url = $this->curl($this->endPoints["image"], $fields);
            $image = $url->IpfsHash;
        }else{
            $image=$request->hashImage;
        }
        
        if($image!=""){
                $name = "temp.json";
                $json = json_decode($request->info);
                $json->image = "ipfs://".$image;
                $json = json_encode($json);
                file_put_contents($name, $json); 

                $cFile = curl_file_create($name);
                $fields = ['file'=> $cFile,
                            'pinataMetadata' => json_encode(["name"=>time() . ".json"])
                    ];
                
                $url = $this->curl($this->endPoints["image"], $fields);
                return response()->json(["hash" => $url->IpfsHash], 200);
        } 
        return response()->json(["error" => "image"], 400);

    }

    public function curl($url, $fields){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url); 
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json'));

        $headers = array(
            "pinata_api_key: 65fba8da9b8bfc731f10",
            "pinata_secret_api_key: 22686cc7069634db6af0195fe5eb9ae09ee562465e2436fdf9519246532295e1",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
        
        $response = curl_exec($curl); 
        curl_close($curl);
        return json_decode($response);
    }


}
