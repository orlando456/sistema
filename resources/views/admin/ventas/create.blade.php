@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>REGISTRO DE VENTA </h1>
@stop

@section('content')
    <p>registrar </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "ventas">
        <thead>
            <form action="{{route('admin.ventas.store')}}" method="POST">
                @csrf

                <div class="from-gruop">

                <label>
                    Usuario:
                    <select name="id" id="" class="from-control btn btn-dark">
                        @foreach($users as $us)
                            <option value="{{$us->id}}">{{$us->name}}</option>
                        @endforeach
                    </select>
                </label>
                </div>
                <br>
                <label>
                    Cliente:
                    <select name="id_cliente" id="" class="from-control btn btn-dark">
                        @foreach($cliente as $cli)
                            <option value="{{$cli->id_cliente}}">{{$cli->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label>
                    numero de comprobante: 
                    <br>
                    <input type="text" name="num_comprobante">
                </label>
                <br>
                <label>
                    total: 
                    <br>
                    <input type="text" name="total">
                </label>
                <br>
                <label>
                    cambio: 
                    <br>
                    <input type="text" name="cambio">
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