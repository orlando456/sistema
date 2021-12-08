@extends('adminlte::page')
@section('title', 'compra')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>COMPRAS</h1>
@stop

@section('content')
    <a href="{{route('admin.compra.create')}}"><button class="btn btn-danger">NUEVO REGISTRO<span></span></button></a>
    <a href="{{route('admin.compra.Reporte')}}"><button class="btn btn-dark">Imprimir PDF<span></span></button></a>
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "compra">
        <thead>
            <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">Usuario</th>
                <th class="btn-dark">Producto</th>
                <th class="btn-dark">Cantidad</th>
                <th class="btn-dark">Precio</th>
                <th class="btn-dark">Total</th>
                <th class="btn-dark">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($compra as $com)
            <tr>
                <td>{{$com->compras_id}}</td>
                <td>{{$com->name}}</td>
                <td>{{$com->nombre}}</td>
                <td>{{$com->precio_unitario}}</td>
                <td>{{$com->cantidad}} Bs.</td>
                <td>{{$com->cantidad*$com->precio_unitario}} Bs.</td>
                <td>
                    <a href=""><button class="btn btn-primary">editar<span></span></button></a>
                    <form action="{{route('admin.compra.destroy',$com->compras_id)}}" class="d-inline formulario-eliminar" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Eliminar<span></span></button></a>
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
        $('#compra').DataTable({
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