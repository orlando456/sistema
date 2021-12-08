@extends('adminlte::page')
@section('title', 'inventario')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>INVENTARIO</h1>
        </div>
    </div>
</div>
@stop

@section('content')
    
    <a href="{{route('admin.inventario.create')}}"><button class="btn btn-danger">NUEVO REGISTRO<span></span></button></a>
    <a href="{{route('admin.inventario.Reporte')}}"><button class="btn btn-dark">Imprimir PDF<span></span></button></a>
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "inventario">
        <thead>
            <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">Usuario</th>
                <th class="btn-dark">Producto</th>
                <th class="btn-dark">Precio Unitario</th>
                <th class="btn-dark">Precio Venta</th>
                <th class="btn-dark">CPP</th>
                <th class="btn-dark">Cantidad Entrada</th>
                <th class="btn-dark">Valor Entrada</th>
                <th class="btn-dark">Cantidad Salida</th>
                <th class="btn-dark">Valor Salida</th>
                <th class="btn-dark">Cantidad Saldo</th>
                <th class="btn-dark">Valor Saldo</th>
                <th class="btn-dark">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($inventario as $in)
            <tr>
                <td>{{$in->inventario_id}}</td>
                <td>{{$in->name}}</td>
                <td>{{$in->nombre}}</td>
                <td>{{$in->precio_unitario}}</td>
                <td>{{$in->precio_venta}}</td>
                <td>{{$in->precio_unitario*$in->cantidad/$in->cantidad}}</td>
                <td>{{$in->cantidad}}</td>
                <td>{{$in->precio_unitario*$in->cantidad}}</td>
                <td>{{$in->cantidadven}}</td>
                <td>{{$in->precio_unitario*$in->cantidad/$in->cantidad*$in->cantidadven}}</td>
                <td>{{$in->cantidad-$in->cantidadven}}</td>
                <td>{{$in->precio_unitario*$in->cantidad-$in->precio_unitario*$in->cantidad/$in->cantidad*$in->cantidadven}}</td>
                <td>
                    <a href="{{route('admin.inventario.edit',$in->inventario_id)}}" class="btn btn-info"><i class="material-icon">Editar</i></a>
                    
                    <form action="{{route('admin.inventario.destroy',$in->inventario_id)}}" method="post" style="display:inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Eliminar<span></span></button></a>
                    </form>
                
                </td>
            </tr>  
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#cliente').DataTable({
            responsive:true,
            autowidth:false,
            
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search': 'Buscar:',
            'paginate':{
                'next': 'siguiente',
                'previous': 'anterior'
            }
            }
        });
    </script>
@stop