<?php

namespace App\Http\Controllers;

use App\Notificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificacionController extends Controller
{
    //
    public function createadmin(){

        return view('notificacion.createadmin');
    }
    public function storeadmin(){

        $data = request()->validate([
            'asunto' => ['required'],
            'cuerpo' => ['required'],
            'idpropiedad' => ['required'],
        ], [
            'titulo.required' => 'Se deben llenar todos los campos',
            'descripcion.required' => 'Se deben llenar todos los campos'
        ]);
        //dd($data);
        Notificacion::create([
            'asunto'=>$data['asunto'],
            'cuerpo'=>$data['cuerpo'],
            'remitenteisadmin'=>true,
            'idpropiedad'=>$data['idpropiedad'],



        ]);
        return redirect('admin');
    }
}
