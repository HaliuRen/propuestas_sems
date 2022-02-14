@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
{{-- <div class="containerBread"> --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
          <li class="breadcrumb-item "><h4>Usuarios</h4></li>
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>
  {{-- </div> --}}
@stop

@section('content')
    {{-- @foreach ( $data as $data )
        <li> {{ $data }} </li>
        <li> {{ $data->id }} </li>
    @endforeach --}}

    <h2 class="text-center mb-5"> Administra tus recetas</h2>
    
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <table class="table">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">ID</th>
                        <th scole="col">CURP</th>
                        <th scole="col">NOMBRE</th>
                        <th scole="col">FECHA CREACIÓN</th>
                        <th scole="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perfil as $perfil)
                        <tr>
                            <td>{{$perfil->id}}</td>
                            <td>{{$perfil->usuario->username}}</td>
                            <td>{{$perfil->nombre}} {{$perfil->apaterno}} {{$perfil->amaterno}}</td>
                            <td>{{$perfil->created_at}}</td>
                            <td>
                                <a href="{{route('perfiles.show',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-success mr-1"><i class="fas fa-pen"></i></a>
                                <a href="{{route('usuarios.show',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </table>

    </div>
@stop

