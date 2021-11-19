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
            
        
    <table class="table table-striped" id = "tipo">
        <thead>
            <form action="{{route('admin.tipo.update', $tipodeproducto->tipo_id)}}" method="POST">

                @csrf
                @method('put')


                <div class="from-gruop">
                    <label from="Nombre" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" name="nombre" value="{{$tipodeproducto->nombre}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="tipo" class="control-label">{{('tipo: ')}}</label> 
                    <input type="text" name="tipo" value="{{$tipodeproducto->tipo}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="descripcion" class="control-label">{{('descripcion: ')}}</label> 
                    <input type="text" name="descripcion" value="{{$tipodeproducto->descripcion}}">
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