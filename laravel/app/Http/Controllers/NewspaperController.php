<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newspaper;

class NewspaperController extends Controller
{
    public function index(){
        $newspaper=Newspaper::latest('date_publish')
        ->where("status", "Publicado")
        ->where("date_publish", '<=', date('Y-m-d'))
        ->paginate(4);
        return response()->json($newspaper, 200);
    }
}
