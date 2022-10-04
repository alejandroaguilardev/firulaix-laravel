<?php

namespace App\Http\Controllers;

use App\Models\Loggers;
use Illuminate\Http\Request;
use App\Mail\RequestMailable;
use Illuminate\Support\Facades\Mail;

class LoggersController extends Controller
{

    public function show($cod)
    {
        $logger=Loggers::where('cod', $cod)
        ->where("status", 'ACTIVO')
        ->first();

        if($logger!=null) {
            return response()->json(["ok" =>true], 200);
        }else{
            return response()->json(["ok" =>false], 200);
        }
    }

}
