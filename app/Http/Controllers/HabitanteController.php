<?php

namespace App\Http\Controllers;

use App\Habitante;
use App\Noticia;
use Illuminate\Http\Request;

class HabitanteController extends Controller
{
    //
    public function principal(){

        $noticias = Noticia::all();
        return view('admin',compact('noticias'));


    }



    public function query(){
        $habitantes = Habitante::all();
        $noticias = Noticia::all();

        $title = 'Listado de Habitantes';

        return view('habitante.query',compact('title','habitantes','noticias'));
    }

    public function show(){
        $data = request()->validate(['idpropiedad' => ['required'],'state'=>'exists:state,idpropiedad'] , [
            'idpropiedad.required' => 'Se deben llenar todos los campos']);
        $idpropiedad = $data['idpropiedad'];
        $idpropiedad = $data['idpropiedad'];
        if(Habitante::where('idpropiedad',$idpropiedad)->exists()){
            return redirect ("admin/show/".$idpropiedad );
        }
        else{
            return redirect("admin");

        }
        //$ruta="admin/show/;"
        //dd($ruta + $idpropiedad);
        return redirect ("admin/show/".$idpropiedad );
    }


    public function mostrar($id){

        $habitante = Habitante::find($id);

        return view('habitante.show',compact('habitante'));


    }


    public function editar(Habitante $habitante){

        return view('habitante.editar',['habitante'=>$habitante]);
    }

    public function update(Habitante $habitante){

        //dd('Actualizando');
        $data = request()->validate([
            'telefono' => ['required','max:7','min:7'],
            'celular' => ['required','min:10','max:10'],
            'contraseña' => ['min:5']
        ], [
            'telefono.required' => 'Se deben llenar todos los campos',
            'celular.required' => 'Se deben llenar todos los campos',
            'contraseña.min'=>'La contraseña debe tener mas de 5 caracteres',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.max' => 'El celular debe tener 10 numeros',
            'celular.min' => 'El celular debe tener 10 numeros',
            'telefono.max' => 'El campo telefono debe tener 7 numeros',
            'telefono.max' => 'El campo telefono debe tener 7 numeros'

        ]);

        if($data['contraseña'] != null){
            $data['contraseña'] = bcrypt($data['contraseña']);

        }
        else{
            unset($data['contraseña']);
        }

        $habitante ->update($data);





        return redirect('admin/consultar');
    }

    public function create(){

        return view('habitante.create');
    }
    public function store(){

        $data = request()->validate([
            'idpropiedad' => ['required','unique:habitantes,idpropiedad'],
            'telefono' => ['required','max:7','min:7'],
            'celular' => ['required','min:10','max:10'],
            'contraseña' => ['required','min:5']
        ], [
            'idpropiedad.required' => 'Se deben llenar todos los campos',
            'telefono.required' => 'Se deben llenar todos los campos',
            'celular.required' => 'Se deben llenar todos los campos',
            'contraseña.required' => 'Se deben llenar todos los campos',
            'contraseña.min'=>'La contraseña debe tener mas de 5 caracteres',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.max' => 'El celular debe tener 10 numeros',
            'celular.min' => 'El celular debe tener 10 numeros',
            'telefono.max' => 'El campo telefono debe tener 7 numeros',
            'telefono.max' => 'El campo telefono debe tener 7 numeros'

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

}
