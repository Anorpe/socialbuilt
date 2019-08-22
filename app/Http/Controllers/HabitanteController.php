<?php

namespace App\Http\Controllers;

use App\Noticia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HabitanteController extends Controller
{
    //



    public function query(){
        $habitantes = User::all();
        $noticias = Noticia::all();

        $title = 'Listado de Habitantes';

        return view('habitante.query',compact('title','habitantes','noticias'));
    }

    public function show(){
        $data = request()->validate([
            'email' => ['required','exists:users'],
        ],[
            'email.required' => 'Se debe llenar el campo ID propiedad'
            //'idpropiedad.exist'=>'“El ID propiedad no se encuentra en la base de datos”'
        ]);
        $email = $data['email'];
        return redirect ("admin/show/".$email );
    }


    public function mostrar($email){

        $habitante = DB::table('users')->where('email', $email)->first();
        //dd($habitante);
        return view('habitante.show',compact('habitante'));


    }


    public function editar(User $user){

        return view('habitante.editar',['user'=>$user]);
    }

    public function update(User $user){

        $data = request()->validate([
            'telefono' => ['required','regex:/^[0-9]{7}$/'],
            'celular' => ['required','regex:/^(3)[0-9]{9}$/'],
            'password' => ['min:5']
        ], [
            'telefono.required' => 'Se debe llenar el campo teléfono',
            'celular.required' => 'Se debe llenar el campo celular',
            'password.min'=>'La contraseña debe mínimo 5 caracteres',
            'celular.regex' => 'El campo celular debe tener 10 dígitos exactamente y empezar por el número 3',
            'telefono.regex' => 'El campo teléfono debe tener 7 dígitos exactamente',

        ]);

        if($data['password'] != null){
            $data['password'] = Hash::make($data['password']);

        }
        else{
            unset($data['password']);
        }

        $user -> update($data);





        return redirect('admin/consultar');
    }


    public function editarclave(){
        $user = Auth::user();

        return view('habitante.modificarclave',['user'=>$user]);
    }

    public function updateclave(User $user){

        $data = request()->validate([
            'password' => ['min:5']
        ], [
            'password.min'=>'La contraseña debe tener mínimo 5 caracteres',


        ]);

        $data['password'] = Hash::make($data['password']);

        $user -> update($data);





        return redirect('home');
    }


    public function create(){

        return view('habitante.create');
    }
    public function store(){

        $data = request()->validate([
            'idpropiedad' => ['required','unique:users,email'],
            'telefono' => ['required','regex:/^[0-9]{7}$/'],
            'celular' => ['required','regex:/^(3)[0-9]{9}$/'],
            'password' => ['required','min:5']
        ], [
            'idpropiedad.required' => 'Se debe llenar el campo ID propiedad',
            'telefono.required' => 'Se debe llenar el campo teléfono',
            'celular.required' => 'Se debe llenar el campo celular',
            'password.required' => 'Se debe llenar el campo password',
            'password.min'=>'La contraseña debe tener mínimo 5 caracteres',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.regex' => 'El campo celular debe tener 10 dígitos exactamente y empezar por el número 3',
            'telefono.regex' => 'El campo teléfono debe tener 7 dígitos exactamente',


        ]);
        //dd($data);
        User::create([
            'email'=>$data['idpropiedad'],
            'telefono'=>$data['telefono'],
            'celular'=>$data['celular'],
            'password'=>Hash::make($data['password']),


        ]);
        return redirect('home');
    }

}
