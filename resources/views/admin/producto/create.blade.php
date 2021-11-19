@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>REGISTRO DE PRUDUCTO </h1>
@stop

@section('content')
    <p>registrar </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "prducto">
        <thead>
            <form action="{{route('admin.producto.store')}}" method="POST">

                @csrf

                <div class="from-gruop">

                <label>
                    Tipo:
                    <select name="tipo_id" id="" class="from-control btn btn-dark">
                        @foreach($tipodeproducto as $tipo)
                            <option value="{{$tipo->tipo_id}}">{{$tipo->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                </div>
                <br>
                <label>
                    Proveedor:
                    <select name="proveedores_id" id="" class="from-control btn btn-dark">
                        @foreach($proveedores as $pro)
                            <option value="{{$pro->proveedores_id}}">{{$pro->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label>
                    nombre: 
                    <br>
                    <input type="text" name="nombre">
                </label>
                <br>
                <label>
                    precio: 
                    <br>
                    <input type="text" name="precio">
                </label>
                <br>
                <label>
                    tela: 
                    <br>
                    <input type="text" name="tela">
                </label>
                <br>
                <label>
                    logotipo: 
                    <br>
                    <input type="text" name="logotipo">
                </label>
                <br>
                <label>
                    talla: 
                    <br>
                    <input type="text" name="talla">
                </label>
                <br>
                <label>
                    color: 
                    <br>
                    <input type="text" name="color">
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