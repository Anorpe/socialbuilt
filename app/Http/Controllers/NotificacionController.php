<?php

namespace App\Http\Controllers;

use App\Notificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            'titulo.required' => 'Se debe llenar el campo título',
            'descripcion.required' => 'Se debe llenar el campo descripción'
        ]);
        //dd($data);
        Notificacion::create([
            'asunto'=>$data['asunto'],
            'cuerpo'=>$data['cuerpo'],
            'remitenteisadmin'=>true,
            'email'=>$data['email'],



        ]);
        return redirect('home');
    }




    //Metodos User
    public function createuser(){



        return view('notificacion.createuser');
    }



    public function showuser(){
        $notificaciones = Notificacion::all()->where("remitenteisadmin","=",True)->where("email","=",Auth::user()->email);
        #$notificaciones = Notificacion::all();
        return view('notificacion.showuser',compact('notificaciones'));
    }
    public function storeuser(){

        $data = request()->validate([
            'asunto' => ['required'],
            'cuerpo' => ['required'],
        ], [
            'titulo.required' => 'Se debe llenar el campo título',
            'descripcion.required' => 'Se debe llenar el campo descripción'
        ]);
        //dd($data);
        Notificacion::create([
            'asunto'=>$data['asunto'],
            'cuerpo'=>$data['cuerpo'],
            'remitenteisadmin'=>false,
            'email'=>Auth::user()->email,



        ]);
        return redirect('home');
    }


    /*    public function showhabitante(){
            $notificaciones = Notificacion::all()->where("remitenteisadmin","=",false)-where('idpropiedad',"=",);
            #$notificaciones = Notificacion::all();
            return view('notificacion.showadmin',compact('notificaciones'));
        }*/
}
