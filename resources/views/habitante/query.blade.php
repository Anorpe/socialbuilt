@extends('layouts.home')
@section('title','Crear Perfil')
@section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <ul>
                                @if ($errors->any())
                                    <div class ="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif

                            </ul>
                            <ul>
                                @if ($errors->any())
                                    <div class ="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                @endif

                            </ul>
                            <form method="POST" action="{{url('admin/show')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ID Propiedad') }}</label>

                                    <div>
                                        <input name="email" id="email" type="text" value="{{ old('email') }}">
                                        {{--            @if ($errors->has('name'))
                                                        <p>{{ $errors->first('name') }}</p>
                                                    @endif--}}
                                    </div>
                                </div>
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Consultar') }}
                                    </button>


                                </div>


                            </form>

                            <br>
                            <div class="card-header">{{ __('Habitantes') }}</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID Propiedad</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($habitantes as $habitante)
                                    <tr>

                                        <td>{{$habitante->email}}</td>
                                        <td>{{$habitante -> telefono}}</td>
                                        <td>{{$habitante -> celular}}</td>
                                        <td><a href="/admin/editar/{{$habitante->email}}">modificar</a></td>

                                    </tr>
                                    <tr>


                                        @empty
                                            <li>No hay Habitantes</li>

                                @endforelse

                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>
@endsection








