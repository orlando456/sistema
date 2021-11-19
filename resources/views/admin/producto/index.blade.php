@extends('adminlte::page')
@section('title', 'producto')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop
@section('content_header')
@stop
@section('content')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>PRODUCTOS</h1>
        </div>
    </div>
</div>
    <div class="card">
        <div class="card-body"> 
    <table class="table table-striped" id = "productos">
        <a href="{{route('admin.producto.create')}}"><button class="btn btn-success">NUEVO REGISTRO<span></span></button></a>
        <thead>
            <tr>
                <th class="btn-dark">tipo</th>
                <th class="btn-dark">id</th>
                <th class="btn-dark">proveedor </th>
                <th class="btn-dark">nombre</th>
                <th class="btn-dark">precio</th>
                <th class="btn-dark">tela</th>
                <th class="btn-dark">logotipo</th>
                <th class="btn-dark">talla</th>
                <th class="btn-dark">color</th>
                <th class="btn-dark">descripcion</th>
                <th class="btn-dark">acciones</th>  
            </tr>
        </thead>
        <tbody>
            @foreach($producto as $pr)
            <tr>
                <td>{{$pr->producto_id}}</td>
                <td>{{$pr->nombre}}</td>
                <td>{{$pr->prove}}</td>
                <td>{{$pr->nombr}}</td>
                <td>{{$pr->precio}}</td>
                <td>{{$pr->tela}}</td>
                <td>{{$pr->logotipo}}</td>
                <td>{{$pr->talla}}</td>
                <td>{{$pr->color}}</td>
                <td>{{$pr->descripcion}}</td>
                <td>
                    <a href="{{route('admin.producto.edit',$pr->producto_id)}}"><button class="btn btn-primary">editar<span></span></button></a>
                    <form action="{{route('admin.producto.destroy',$pr->producto_id)}}" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">eliminar<span></span></button></a>
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
        $('#productos').DataTable({
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