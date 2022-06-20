<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news=News::latest('id')
        ->where("status", "Publicado")
        ->where("date_publish", '<=', date('Y-m-d'))
        ->paginate(4);

        $featured=News::latest('date_publish')->where("featured", 1)->first();
        return response()->json($news, 200);
    }


    public function show($slug)
    {
        $news=News::where('slug', $slug)->where("status", "Publicado")->first();
        return response()->json($news, 200);
    }

    
}
