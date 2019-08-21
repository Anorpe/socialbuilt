@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Notificacion') }}</div>

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
                        <form method="POST" action="{{url('user/crearnotificacion')}}">

                            @csrf







                            <div class="form-group row">
                                <label for="asunto" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>

                                <div class="col-md-6">
                                    <input name="asunto" id="asunto" type="text" value="{{ old('asunto') }}" >

                                </div>
                            </div>

                            <br>

                            <div class="form-group row">
                                <label for="cuerpo" class="col-md-4 col-form-label text-md-right">{{ __('Cuerpo') }}</label>

                                <div class="col-md-6">
                                    <input name="cuerpo" id="cuerpo" type="text" value="{{ old('cuerpo') }}" >

                                </div>
                            </div>



                            <br>


                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





