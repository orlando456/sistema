@extends('adminlte::page')
@section('title', 'roles')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>Mostrar ROLES</h1>
@stop

@section('content')
    <p>LISTA DE Roles </p>
    <p>-------</p>
    <a href="{{route('admin.usuario.registroroles')}}"><button class="btn btn-danger">NUEVO REGISTRO<span></span></button></a>
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "roles">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $ro)
            <tr>
                <td>{{$ro->rol_id}}</td>
                <td>{{$ro->nombre}}</td>
                <td>{{$ro->descripcion}}</td>
                <td>
                    <a href=""><button class="btn btn-primary">editar<span></span></button></a>
                    <a href=""><button class="btn btn-danger">eliminar<span></span></button></a>
                </td>
            </tr>  
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop