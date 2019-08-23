
@extends('layouts.home')
@section('title','Crear Perfil')
@section('stylessheets')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="post-content">
                        <div class="post-container">

                            <div class="post-detail">
                                <h1>Crear Usuario</h1>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                    <form method="POST" action="{{url('admin/crear')}}">
                                      @csrf
                                      <div class="form-group row">
                                          <label for="idpropiedad" class="col-md-4 col-form-label text-md-right">{{ __('ID Propiedad') }}</label>
                                          <div>
                                              <input name="idpropiedad" id="idpropiedad"  class="form-control" type="number" value="{{ old('idpropiedad') }}">
                                  {{--            @if ($errors->has('name'))
                                                  <p>{{ $errors->first('name') }}</p>
                                              @endif--}}
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                                          <div>
                                              <input name="telefono" id="telefono"  class="form-control"  type="number" value="{{ old('telefono') }}" >
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                                          <div>
                                              <input name="celular" id="celular"  class="form-control" type="number" value="{{ old('celular') }}" >

                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                          <div>
                                              <input name="password" id="password"  class="form-control" type="password" value="{{ old('password') }}" >

                                          </div>
                                      </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                            <div>
                                                <input id="password-confirm" type="password" class="form-control" name="password-confirm" required autocomplete="new-password">
                                            </div>
                                        </div>
                                      <div class="col-md-8 offset-md-4">
                                          <button type="submit" class="btn btn-primary">
                                              {{ __('Crear Perfil') }}
                                          </button>
                                      </div>
                                  </form>
                                </div>
                                <div class="line-divider"></div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')


