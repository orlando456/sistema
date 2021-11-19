@extends('adminlte::page')
@section('title', 'editar proveedor')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>EDITAR CLIENTES </h1>
@stop

@section('content')
    <p> </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "proveedor">
        <thead>
            <form action="{{route('admin.proveedor.update',$proveedores->proveedores_id)}}" method="POST">

                @csrf
                @method('put')

                <div class="from-gruop">
                    <label from="Nombre" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" name="nombre" value="{{$proveedores->nombre}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="apellido_paterno" class="control-label">{{('apellido_paterno: ')}}</label> 
                    <input type="text" name="apellido_paterno" value="{{$proveedores->apellido_paterno}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="apellido_materno" class="control-label">{{('apellido_materno: ')}}</label> 
                    <input type="text" name="apellido_materno" value="{{$proveedores->apellido_materno}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="ci" class="control-label">{{('CI: ')}}</label> 
                    <input type="text" name="ci" value="{{$proveedores->ci}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="edad" class="control-label">{{('edad: ')}}</label> 
                    <input type="text" class="" name="edad" value="{{$proveedores->edad}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="telefono" class="control-label">{{('telefono: ')}}</label> 
                    <input type="text"  name="telefono" value="{{$proveedores->telefono}}">
                </div>    
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