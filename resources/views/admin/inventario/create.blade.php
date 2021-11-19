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
                    Nombre:
                    <select name="producto_id" id="" class="from-control btn btn-dark">
                        @foreach($producto as $pro)
                            <option value="{{$pro->producto_id}}">{{$pro->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label>
                    usuario:
                    <select name="id" id="" class="from-control btn btn-dark">
                        @foreach($users as $us)
                            <option value="{{$us->id}}">{{$us->name}}</option>
                        @endforeach
                    </select>
                </label>
                
                <br>
                <div class="from-gruop">
                    <label from="cantidad_salida" class="control-label">{{('cantidad_salida: ')}}</label> 
                    <input type="text" class="form-control " name="cantidad_salida"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="cantidad_entrada" class="control-label">{{('cantidad entrada: ')}}</label> 
                    <input type="text" class="form-control " name="cantidad_entrada"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="precio_unitario" class="control-label">{{('precio_unitario:')}}</label> 
                    <input type="text" class="form-control" name="precio_unitario"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="stock" class="control-label">{{('stock: ')}}</label> 
                    <input type="text" class="form-control" name="stock"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="total" class="control-label">{{('total: ')}}</label> 
                    <input type="text" class="form-control" name="total"> 

                </div>
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
    <script> console.log('Hi!'); </script>
    
@stop