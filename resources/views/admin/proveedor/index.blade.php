@extends('adminlte::page')
@section('title', 'proveedor')


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
        <h1>PROVEEDORES</h1>
        </div>
    </div>
</div>    

    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "proveedor">
        <a href="{{route('admin.proveedor.create')}}"><button class="btn btn-success">NUEVO REGISTRO<span></span></button></a>
        <a href="{{route('admin.proveedor.create')}}"><button class="btn btn-danger">PDF<span></span></button></a>
        <thead>
            <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">nombre</th>
                <th class="btn-dark">apellido paterno</th>
                <th class="btn-dark">apellido materno</th>
                <th class="btn-dark">ci</th>
                <th class="btn-dark">edad</th>
                <th class="btn-dark">telefono</th>
                <th class="btn-dark">acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($proveedores as $prov)
            <tr>
                <td>{{$prov->proveedores_id}}</td>
                <td>{{$prov->nombre}}</td>
                <td>{{$prov->apellido_paterno}}</td>
                <td>{{$prov->apellido_materno}}</td>
                <td>{{$prov->ci}}</td>
                <td>{{$prov->edad}}</td>
                <td>{{$prov->telefono}}</td>
                <td>
                    <a href="{{route('admin.proveedor.edit',$prov->proveedores_id)}}" class="btn btn-info"><i class="material-icon">editar</i></a>
                    
                    <form action="{{route('admin.proveedor.destroy',$prov->proveedores_id)}}" method="post" style="display:inline">
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
        $('#proveedor').DataTable({
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