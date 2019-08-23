<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:5', 'confirmed'],
            'telefono' => ['required','regex:/^[0-9]{7}$/'],
            'celular' => ['required','regex:/^(3)[0-9]{9}$/'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data = request()->validate([
            'idpropiedad' => ['required','unique:users,email'],
            'telefono' => ['required','regex:/^[0-9]{7}$/'],
            'celular' => ['required','regex:/^(3)[0-9]{9}$/'],
            'password' => ['required','min:5'],
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
        if($data['password'] != $data['password-confirm']){
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'field_name_1' => ['Validation Message #1'],
                'field_name_2' => ['Validation Message #2'],
            ]);
            throw $error;
        }
        User::create([
            'email'=>$data['idpropiedad'],
            'telefono'=>$data['telefono'],
            'celular'=>$data['celular'],
            'password'=>Hash::make($data['password']),


        ]);
        return redirect('home');
    }
}
