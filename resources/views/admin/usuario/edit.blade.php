@extends('adminlte::page')
@section('title', 'editar usuarios')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>EDITAR USUARIO </h1>
@stop

@section('content')
    <p> </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "usuario">
        <thead>
            <form action="{{route('admin.usuario.update', $users->id)}}" method="POST">

                @csrf
                @method('put')
                <label> 
                    Nombre: 
                    <br>
                    <input type="text" name="name" value="{{$users->name}}">
                </label>
                <br>
                <label>
                    Email: 
                    <br>
                    <input type="text" name="email" value="{{$users->email}}">
                </label>
                <br>
                <label>
                    Contraseña: 
                    <br>
                    <input type="text" name="password" value="{{$users->password}}">
                </label>
                <br>

                <td>
                    <a href=""><button class="btn btn-primary" type="submit">EDITAR<span></span></button></a>
                </td>
            </form>


            
        </thead>
        
    </table>
    </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop