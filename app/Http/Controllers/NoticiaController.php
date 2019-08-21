<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticiaController extends Controller
{
    public function create(){

        return view('noticia.create');
    }



    public function store(){

        $data = request()->validate([
            'titulo' => ['required'],
            'descripcion' => ['required']
        ], [
            'titulo.required' => 'Se deben llenar todos los campos',
            'descripcion.required' => 'Se deben llenar todos los campos'
        ]);
        //dd($data);
        Noticia::create([
            'titulo'=>$data['titulo'],
            'descripcion'=>$data['descripcion']



        ]);
        return redirect('home');
    }
}
