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
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "producto">
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
                <div class="row">
                    <label from="nombre" class="col-sm-2 col-form-label">{{('nombre: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="nombre" placeholder="Ingrese el nombre del Producto"> 
                    @if($errors->has('nombre'))
                        <span class="error text-darger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="marca" class="col-sm-2 col-form-label">{{('marca: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="marca" placeholder="Ingrese la marca de Producto"> 
                    @if($errors->has('marca'))
                        <span class="error text-darger" for="input-marca">{{ $errors->first('marca')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                    <div class="form-group">	
                        <label for="precio_venta">Precio venta</label>
                        <input type="number"  name="precio_venta" id="precio_venta" class="form-control" placeholder="Precio venta">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="talla" class="col-sm-2 col-form-label">{{('talla: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="talla" placeholder="Ingrese la medida"> 
                    @if($errors->has('talla'))
                        <span class="error text-darger" for="input-talla">{{ $errors->first('talla')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="color" class="col-sm-2 col-form-label">{{('color: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="color" placeholder="Ingrese el color"> 
                    @if($errors->has('color'))
                        <span class="error text-darger" for="input-color">{{ $errors->first('color')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="stock" class="col-sm-2 col-form-label">{{('stock: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="stock" placeholder="Ingrese la cantidad"> 
                    @if($errors->has('stock'))
                        <span class="error text-darger" for="input-stock">{{ $errors->first('stock')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="descripcion" class="col-sm-2 col-form-label">{{('descripcion: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="descripcion" placeholder="breve descripcion"> 
                    @if($errors->has('descripcion'))
                        <span class="error text-darger" for="input-descripcion">{{ $errors->first('descripcion')}}</span>
                    @endif
                    </div>
                </div>
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