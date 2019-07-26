@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Habitante') }}</div>

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
<form method="POST" action="{{url('admin/crear')}}">

    @csrf


    <div class="form-group row">
        <label for="idpropiedad" class="col-md-4 col-form-label text-md-right">{{ __('ID Propiedad') }}</label>

        <div>
            <input name="idpropiedad" id="idpropiedad" type="number" value="{{ old('idpropiedad') }}">
{{--            @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>
            @endif--}}
        </div>
    </div>




    <br>

    <div class="form-group row">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

        <div class="col-md-6">
            <input name="telefono" id="telefono" type="number" value="{{ old('telefono') }}" >

        </div>
    </div>

    <br>

    <div class="form-group row">
        <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

        <div class="col-md-6">
            <input name="celular" id="celular" type="number" value="{{ old('celular') }}" >

        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="contraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

        <div class="col-md-6">
            <input name="contraseña" id="contraseña" type="password" value="{{ old('password') }}" >

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






