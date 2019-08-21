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
            'email.required' => 'Se deben llenar todos los campos'
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
            'telefono.required' => 'Se deben llenar todos los campos',
            'celular.required' => 'Se deben llenar todos los campos',
            'password.min'=>'La contraseña debe tener mas de 5 caracteres',
            'celular.regex' => 'El celular debe tener 10 numeros',
            'telefono.regex' => 'El campo telefono debe tener 7 numeros',

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
            'password.min'=>'La contraseña debe tener mas de 5 caracteres',


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
            'idpropiedad.required' => 'Se deben llenar todos los campos',
            'telefono.required' => 'Se deben llenar todos los campos',
            'celular.required' => 'Se deben llenar todos los campos',
            'password.required' => 'Se deben llenar todos los campos',
            'password.min'=>'La contraseña debe tener mas de 5 caracteres',
            'idpropiedad.unique' => 'El campo idpropiedad debe ser único',
            'celular.regex' => 'El celular debe tener 10 numeros',

            'telefono.regex' => 'El campo telefono debe tener 7 numeros',


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
