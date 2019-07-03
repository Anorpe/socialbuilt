@extends('layouts.app')


@section('content')




<div class="top-right links">

        <a href="{{ url('/home') }}">Consultar</a>

        <a href="{{ route('login') }}">Registrar</a>


            <a href="{{ route('admin/habitantes') }}">Listar Habitantes</a>


</div>




@endsection