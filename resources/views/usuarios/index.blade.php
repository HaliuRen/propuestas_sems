@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
          <li class="breadcrumb-item "><h4>Usuarios</h4></li>
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
        </ol>
    </nav>
@stop

@section('content')

{{-- Setup data for datatables --}}
@php
$heads = [
    'ID',
    'CURP',
    ['label' => 'Nombre'],
    ['label' => 'Fecha Creación'],
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';
// $id => {{$perfil->id}};
// $username = $perfil->usuario->username;
// $nombre = $perfil->nombre. $perfil->apaterno. $perfil->amaterno;
// $fcreacion = $perfil->created_at;

$config = [
    'data' => [
        // [ ['id' => $perfil->id], ['curp' => $perfil->usuario->username], ['nombre' => $perfil->nombre. $perfil->apaterno. $perfil->amaterno], ['fcreacion' => $perfil->$fcreacion], '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        // [ 
        //     $id,$username, $nombre, $fcreacion ,'<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'
        // ],
            [
                
            ]
    ],
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<div class="col-md-12 mx-auto bg-white p-4 mt-2">
    <x-adminlte-datatable id="table1" :heads="$heads">
        {{-- @foreach($perfil as $perfil)
            <tr>
                <td>{{$perfil->id}}</td>
                            <td>{{$perfil->usuario->username}}</td>
                            <td>{{$perfil->nombre}} {{$perfil->apaterno}} {{$perfil->amaterno}}</td>
                            <td>{{$perfil->created_at}}</td>
                            <td>
                                <a href="{{route('usuarios.show',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                <a href="{{route('usuarios.edit',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                
                            </td>
            </tr>
        @endforeach --}}
        @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
    </x-adminlte-datatable>
</div>


{{ $perfil }}
    @foreach ( $perfil as $data )
        <li> {{ $data }} </li>
        <li> {{ $data->id }} </li>
    @endforeach

    <h2 class="text-center mb-5"> Administra tus recetas</h2>
    
    <div class="col-md-10 mx-auto bg-white p-3">
        {{-- <table class="table">
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
                            {{-- <td>{{$perfil->id}}</td>
                            <td>{{$perfil->usuario->username}}</td>
                            <td>{{$perfil->nombre}} {{$perfil->apaterno}} {{$perfil->amaterno}}</td>
                            <td>{{$perfil->created_at}}</td> --}}
                            {{-- <td>
                                <a href="{{route('usuarios.show',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                <a href="{{route('usuarios.edit',['perfil' => $perfil->id])}}" class="btn btn-success mr-1"><i class="fas fa-pen"></i></a>
                                <a href="" class="btn btn-success mr-1"><i class="far fa-eye"></i></a>
                                
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </table> --}} 

    </div>
@stop

