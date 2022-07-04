<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WarTestnetController extends Controller
{

    private $endPoints = [
        "json" => [
            'url'=> 'https://api.pinata.cloud/pinning/pinFileToIPFS',
            'pinata_api_key' => '65fba8da9b8bfc731f10',
            'pinata_secret_api_key' => '22686cc7069634db6af0195fe5eb9ae09ee562465e2436fdf9519246532295e1',
        ],
        "image" =>[
            'url'=> 'https://api.pinata.cloud/pinning/pinFileToIPFS',
            'pinata_api_key' => '65fba8da9b8bfc731f10',
            'pinata_secret_api_key' => '22686cc7069634db6af0195fe5eb9ae09ee562465e2436fdf9519246532295e1',
        ],
        "pedigree" =>[
            'url'=> 'https://api.pinata.cloud/pinning/pinFileToIPFS',
            'pinata_api_key' => '65fba8da9b8bfc731f10',
            'pinata_secret_api_key' => '22686cc7069634db6af0195fe5eb9ae09ee562465e2436fdf9519246532295e1',
        ],
    ];

    public function store(Request $request)
    {
        $name = "";
        $image = $request->hasFile("image") ?  $this->imageIPFS($request->file("image"),"image") : $request->hashImage;
        $pedigree = $request->hasFile("pedigree") ?  $this->imageIPFS($request->file("pedigree"),"pedigree") : $request->hashPedigree;

    
        if ($image != "") {
            $name = "temp.json";
            $json = json_decode($request->info);
            $json->image = "ipfs://" . $image;
            $json->pedigree = "ipfs://" . $pedigree;

            $json = json_encode($json);
            file_put_contents($name, $json);

            $cFile = curl_file_create($name);
            $fields = [
                'file' => $cFile,
                'pinataMetadata' => json_encode(["name" => time() . ".json"])
            ];

            $url = $this->curl("json", $fields);
            return response()->json(["hash" => $url->IpfsHash], 200);
        }
        return response()->json(["error" => "image"], 400);
    }

    private function ImageIPFS($image, $name)
    {
        $nameImage = $name . "." . $image->guessExtension();
        $this->imageSave($nameImage, $image);

        $cFile = curl_file_create($nameImage);
        $fields = [
            'file' => $cFile,
            'pinataMetadata' => json_encode(["name" => time() . "." . $image->guessExtension()])
        ]; // Parameter to be sent

        $url = $this->curl($name, $fields);
        return $url->IpfsHash;
    }

    public function curl($name, $fields,)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->endPoints[$name]["url"]);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $headers = array(
            "pinata_api_key:".$this->endPoints[$name]["pinata_api_key"] ,
            "pinata_secret_api_key:".$this->endPoints[$name]["pinata_secret_api_key"] ,
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
