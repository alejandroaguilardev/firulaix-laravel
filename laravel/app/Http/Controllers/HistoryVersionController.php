<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryVersion;

class HistoryVersionController extends Controller
{
    public function index(){

        $historyVersion=HistoryVersion::latest('date_publish')
        ->where("status", "Publicado")
        ->where("date_publish", '<=', date('Y-m-d'))
        ->paginate(5);
        return response()->json($historyVersion, 200);

    }


    public function show($version)
    {
        $arr = explode("-", $version);
        $version=  $arr[0];
        $system= isset($arr[1]) ? $arr[1] : "null";
 
        $historyVersion=HistoryVersion::where('version', $version)
        ->where("system", $system)
        ->where("status", "Publicado")
        ->where("date_publish", '<=', date('Y-m-d'))
        ->first();
    
         if(empty($historyVersion)){
            $historyVersion=HistoryVersion::latest('id')
            ->where("status", "Publicado")
            ->where("status", "Publicado")
            ->where("date_publish", '<=', date('Y-m-d'))
            ->first();
         }

        return response()->json($historyVersion, 200);
    }

    
}
