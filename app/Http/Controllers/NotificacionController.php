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



    public function showadmin(){
        $notificaciones = Notificacion::all()->where("remitenteisadmin","=",false);
        #$notificaciones = Notificacion::all();
        return view('notificacion.showadmin',compact('notificaciones'));
    }
    public function storeadmin(){

        $data = request()->validate([
            'asunto' => ['required'],
            'cuerpo' => ['required'],
            'email' => ['required'],
        ], [
            'titulo.required' => 'Se deben llenar todos los campos',
            'descripcion.required' => 'Se deben llenar todos los campos'
        ]);
        //dd($data);
        Notificacion::create([
            'asunto'=>$data['asunto'],
            'cuerpo'=>$data['cuerpo'],
            'remitenteisadmin'=>true,
            'email'=>$data['email'],



        ]);
        return redirect('admin');
    }


/*    public function showhabitante(){
        $notificaciones = Notificacion::all()->where("remitenteisadmin","=",false)-where('idpropiedad',"=",);
        #$notificaciones = Notificacion::all();
        return view('notificacion.showadmin',compact('notificaciones'));
    }*/
}
