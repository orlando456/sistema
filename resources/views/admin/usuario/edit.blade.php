@extends('adminlte::page')
@section('title', 'editar usuarios')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <div class="col-md-12">
        <div class="card-header p-1 mb-1 bg-primary text-primary">
            <div class="card-title mb-1 text-white">
            <h1 style="text-center">Editar Datos</h1>
            </div>
        </div>
    </div>
@stop

@section('content')
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "usuario">
        <thead>
            <form action="{{route('admin.usuario.update', $users->id)}}" method="POST">

                @csrf
                @method('put')
                
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                <div class="from-gruop">
                    <label from="Nombre" class="sr-only">{{('Nombre: ')}}</label> 
                    <input type="text" name="name" value="{{$users->name}}">
                </div> 
                <br>
                
                <div class="from-gruop">
                    <label from="email" class="control-label">{{('Email: ')}}</label> 
                    <input type="text" name="email" value="{{$users->email}}">
                </label>
                <br>
                <div class="from-gruop">
                    <label from="password" class="control-label">{{('Contraseña: ')}}</label> 
                    <input type="text" name="password" value="{{$users->password}}">
                </label>
                <br>

                <td>
                    <a href=""><button class="btn btn-primary" type="submit">EDITAR<span></span></button></a>
                </td>
            </form>
            </form>


            
        </thead>
        
    </table>
    </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop