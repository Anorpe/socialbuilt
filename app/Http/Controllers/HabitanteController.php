<?php

namespace App\Http\Controllers;

use App\Habitante;
use App\Noticia;
use Illuminate\Http\Request;

class HabitanteController extends Controller
{
    //
    public function principal(){


        return view('admin');


    }



    public function index(){
        $habitantes = Habitante::all();
        $noticias = Noticia::all();

        $title = 'Listado de Habitantes';

        return view('habitantes',compact('title','habitantes','noticias'));
    }


    public function show($id){
        $user = Habitante::find($id);

        return view(user,compact('user'));


    }


    public function editar(Habitante $habitante){

        return view('editar',['habitante'=>$habitante]);
    }

    public function update(Habitante $habitante){

        //dd('Actualizando');
        $data = request()->validate([
            'telefono' => ['required','max:7','min:7'],
            'celular' => ['required','min:10','max:10'],
            'contraseña' => 'required',
        ], [
            'idpropiedad.required' => 'El campo idpropiedad es obligatorio',
            'telefono.required' => 'El campo telefono es obligatorio',
            'celular.required' => 'El campo celular es obligatorio',
            'contraseña.required' => 'El campo contraseña es obligatorio',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.max' => 'El campo celular debe contener exactamente 10 numeros',
            'celular.min' => 'El campo celular debe contener exactamente 10 numeros',
            'telefono.max' => 'El campo celular debe contener exactamente 7 numeros',
            'telefono.max' => 'El campo celular debe contener exactamente 7 numeros',

        ]);

        if($data['contraseña'] != null){
            $data['contraseña'] = bcrypt($data['contraseña']);

        }
        else{
            unset($data['contraseña']);
        }

        $habitante ->update($data);





        return redirect('admin');
    }

    public function create(){

        return view('create');
    }
    public function store(){

        $data = request()->validate([
            'idpropiedad' => ['required','unique:habitantes,idpropiedad'],
            'telefono' => ['required','max:7','min:7'],
            'celular' => ['required','min:10','max:10'],
            'contraseña' => 'required',
        ], [
            'idpropiedad.required' => 'El campo idpropiedad es obligatorio',
            'telefono.required' => 'El campo telefono es obligatorio',
            'celular.required' => 'El campo celular es obligatorio',
            'contraseña.required' => 'El campo contraseña es obligatorio',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.max' => 'El campo celular debe contener exactamente 10 numeros',
            'celular.min' => 'El campo celular debe contener exactamente 10 numeros',
            'telefono.max' => 'El campo celular debe contener exactamente 7 numeros',
            'telefono.max' => 'El campo celular debe contener exactamente 7 numeros',

        ]);
        //dd($data);
        Habitante::create([
            'idpropiedad'=>$data['idpropiedad'],
            'telefono'=>$data['telefono'],
            'celular'=>$data['celular'],
            'contraseña'=>bcrypt($data['contraseña']),


        ]);
        return redirect('admin');
    }
    public function createnoticia(){

        return view('createnoticia');
    }
    public function storenoticia(){

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
        return redirect('admin');
    }
}
