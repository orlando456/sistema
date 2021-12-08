@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>REGISTRO DE CLIENTES </h1>
@stop

@section('content')
    
    <div class="card ">
        <div class="card-body btn-dark">
            
        
    <table class="table table-striped" id = "cliente">
        <thead>
            <form action="{{route('admin.inventario.store')}}" method="POST">

                @csrf
                <label>
                    usuario:
                    <select name="id" id="" class="from-control btn btn-dark">
                        @foreach($users as $us)
                            <option value="{{$us->id}}">{{$us->name}}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                
                <label>
                    Peoducto:
                    <select name="producto_id" id="producto" class="from-control btn btn-dark">
                        @foreach($producto as $pro)
                            <option value="{{$pro->producto_id}}_{{$pro->precio_venta}}">{{$pro->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    precio de producto:
                    <input type="number" disabled class="form-control " name="precio_venta" id="precio_venta"> 
                </label>
                <br>
                <label>
                    Precio de Compra:
                    <input type="number" disabled class="form-control " name="precio_compra" id="precio_compra">
                </label>
                <label>
                    cantidad entrada:
                    <input type="number" disabled class="form-control " name="cantidad_entrada" id="cantidad_entrada">
                </label>
                <label>
                    cantidad ventas:
                    <input type="number" disabled class="form-control " name="cantidad_ventas" id="cantidad_ventas">
                </label>
              
                <br>
                <td>
                    <a href=""><button class="btn btn-info" type="submit">GUARDAR<span></span></button></a>
                </td>
            </form>


            
        </thead>
        
    </table>
    </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); 
    $("#producto").change(mostrarValores);

    function mostrarValores(){
        datosProducto = document.getElementById('producto').value.split('_');
        $("#precio_venta").val(datosProducto[1]);
    }
    </script>
    
@stop