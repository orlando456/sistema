@extends('adminlte::page')
@section('title', 'editar clientes')


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
        <div class="card-body btn-success">
            
        
    <table class="table table-striped" id = "cliente">
        <thead>
            <form action="{{route('admin.cliente.update', $cliente->id_cliente)}}" method="POST">

                @csrf
                @method('put')


                <div class="from-gruop">
                    <label from="Nombre" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" name="nombre" value="{{$cliente->nombre}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="apellido_paterno" class="control-label">{{('apellido_paterno: ')}}</label> 
                    <input type="text" name="apellido_paterno" value="{{$cliente->apellido_paterno}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="apellido_materno" class="control-label">{{('apellido_materno: ')}}</label> 
                    <input type="text" name="apellido_materno" value="{{$cliente->apellido_materno}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="detalle" class="control-label">{{('CI: ')}}</label> 
                    <input type="text" name="detalle" value="{{$cliente->detalle}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="edad" class="control-label">{{('edad: ')}}</label> 
                    <input type="text" class="" name="edad" value="{{$cliente->edad}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="telefono" class="control-label">{{('telefono: ')}}</label> 
                    <input type="text"  name="telefono" value="{{$cliente->telefono}}">
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