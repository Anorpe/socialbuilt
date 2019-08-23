
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
                                <h6>Crear Usuario</h6>
                                <div class="line-divider"></div>
                                <div class="post-text">
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


