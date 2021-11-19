@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>VISTA REPORTE DE CLIENTES </h1>
@stop

@section('content')
    <p>REPOSTES </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "cliente">
        <thead>
            <form action="{{route('admin.compra.store')}}" method="POST">

                @csrf

                <label> 
                    nombre: 
                    <br>
                    <input type="text" name="nombre">
                </label>
                <br>
                <label>
                    apellido_paterno: 
                    <br>
                    <input type="text" name="apellido_paterno">
                </label>
                <br>
                <label>
                    apellido_materno: 
                    <br>
                    <input type="text" name="apellido_materno">
                </label>
                <br>
                <label>
                    detalle: 
                    <br>
                    <textarea name="detalle"  rows="5"></textarea>
                </label>
                <br>
                <label>
                    edad: 
                    <br>
                    <input type="text" name="edad">
                </label>
                <br>
                <label>
                    telefono: 
                    <br>
                    <input type="text" name="telefono">
                </label>

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