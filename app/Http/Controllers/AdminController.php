<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function principal(){
        $noticias = Noticia::all();
        return view('admin',compact('noticias'));
    }
}
