@extends('adminlte::page')
@section('title', 'registro roles')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>REGISTRO ROLES </h1>
@stop

@section('content')
    <p>registro </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "roles">
        <thead>
            <form action="{{route('admin.usuario.registroroles.store')}}" method="POST">

                @csrf

                <label> 
                    nombre rol: 
                    <br>
                    <input type="text" name="nombre">
                </label>
                <br>
                <label>
                    descripcion: 
                    <br>
                    <textarea name="descripcion"  rows="5"></textarea>
                </label>
                <br>

                <td>
                    <a href=""><button class="btn btn-primary" type="submit">GUARDAR<span></span></button></a>
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