@extends('adminlte::page')
@section('title', 'tipo')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>TIPOS DE PRODUCTO </h1>
@stop

@section('content')
    
    <a href="{{route('admin.tipo.create')}}"><button class="btn btn-danger">NUEVO REGISTRO<span></span></button></a>
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "tipodeproducto">
        <thead>
            <tr>
                <th class="btn-dark">Id</th>
                <th class="btn-dark">Tipo de Producto</th>
                <th class="btn-dark">Tipo</th>
                <th class="btn-dark">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
        <tbody>
            @foreach($tipodeproducto as $t)
            <tr>
                <td>{{$t->tipo_id}}</td>
                <td>{{$t->nombre}}</td>
                <td>{{$t->tipo}}</td>
                <td>
                    <a href="{{route('admin.tipo.edit',$t->tipo_id)}}" class="btn btn-info"><i class="material-icon">Modificar</i></a>
                    
                    <form action="{{route('admin.tipo.destroy',$t->tipo_id)}}" method="post" style="display:inline">
                    @csrf
                    @method('Delete')
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
        $('#tipodeproducto').DataTable({
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