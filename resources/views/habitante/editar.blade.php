@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modificar Perfil') }}</div>

                    <div class="card-body">

                        <ul>
                            @if ($errors->any())
                                <div class ="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif

                        </ul>
                        <form method="POST" action={{route('update',['editado'=>$editado])}}>

                            {{method_field('PUT')}}
                            @csrf


                            <div class="form-group row">
                                <label  class="col-md-4 col-form-label text-md-right">{{ $editado->email }}</label>


                            </div>




                            <br>

                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    <input name="telefono" id="telefono" type="number" value="{{ old('telefono',$editado->telefono) }}" >

                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                                <div class="col-md-6">
                                    <input name="celular" id="celular" type="number" value="{{ old('celular',$editado->celular) }}" >

                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input name="password" id="password" type="password"  >

                                </div>
                            </div>


                            <br>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar') }}
                                </button>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection







