@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
                <form method="POST" action="{{url('admin/crear')}}">
                    @csrf
                     <div class="form-group row">
                     <label for="idpropiedad" class="col-md-4 col-form-label text-md-right">{{ __('ID Propiedad') }}</label>
                     </div>
                     <input name="idpropiedad" id="idpropiedad" type="number" value="{{ old('idpropiedad') }}">
                    <br>
                     <div class="form-group row">
                     <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                     </div>
                     <div class="col-md-6">
                     <input name="telefono" id="telefono" type="number" value="{{ old('telefono') }}" >
                     </div>
                     <br>
                     <div class="form-group row">
                     <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>
                     </div>
                     <div class="col-md-6">
                     <input name="celular" id="celular" type="number" value="{{ old('celular') }}" >
                     </div>
                     <br>
                     <div class="form-group row">
                     <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                     <div class="col-md-6">
                     <input name="password" id="password" type="password" value="{{ old('password') }}" >
                     </div>
                     </div>
                     <br>
                     <div class="col-md-8 offset-md-4">
                     <button type="submit" class="btn btn-primary">
                        {{ __('Crear Perfil') }}
                     </button>
                     </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











