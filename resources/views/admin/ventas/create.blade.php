@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>REGISTRO DE VENTAS </h1>
@stop

@section('content')
    
    
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
                
                <label>
                    Cliente:
                    <select name="id_cliente" id="" class="from-control btn btn-dark">
                        @foreach($cliente as $cli)
                            <option value="{{$cli->id_cliente}}">{{$cli->ci}}</option>
                        @endforeach
                    </select>
                
                    
                </label>
                
                <div class="col-sm-4 col-md-4 col-12">
                    <div class="form-group">    
                        <label>Producto</label>
                        <select class="form-control selectpicker" name="producto_id" id="producto_id" data-live-search="true">
                         @foreach($producto as $product)
                            <option value="{{$product->producto_id}}">{{$product->nombre}}</option>
                        @endforeach
                        </select>
                     </div>
                     <label>
                        Tipo:
                        <select name="tipo_id" id="" class="from-control btn btn-dark">
                            @foreach($tipodeproducto as $tipo)
                                <option value="{{$tipo->tipo_id}}">{{$tipo->nombre}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                
                <div class="col-sm-2 col-md-2 col-12">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control"
                            placeholder="cantidad">
                    </div>
                </div>
                <br>
                <div class="col-sm-2 col-md-2 col-12">
                    <div class="form-group">
                        <label for="Stock">Stock</label>
                        <input type="number" disabled name="Stock" id="Stock" class="form-control"
                            placeholder="stock">
                    </div>
                </div>
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
                    <a href=""><button class="btn btn-info" type="submit">GUARDAR<span></span></button></a>
                    <a href="{{route('admin.ventas.index')}}" class="btn btn-danger" type="submit">CANCELAR</a>
                </td>
                
                <div class="col-sm-12 col-md-12 col-12">
                    <table id="detalles"
                        class="table-sm table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color:#A9D0F5">
                            <th>Opciones</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                        </thead>
                        <tfoot>
                            <th class="">Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            </th>
                            <th class="">
                                <h4 id="total">s/. 0.00</h4><input type="hidden" name="total_venta"
                                    id="total_venta">
                            </th>
                        </tfoot>
                <td>
                    <a href=""><button class="btn btn-primary" type="submit">GUARDAR<span></span></button></a>
                </td>
            </form>

        </thead>
        
    </table>
    </div>
    </div>
@stop