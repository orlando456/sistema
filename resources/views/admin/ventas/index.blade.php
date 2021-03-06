@extends('adminlte::page')
@section('title', 'ventas')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>Ventas</h1>
        </div>
    </div>
</div>
    
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                <label for="min">Desde</label>
                <input type="date" value="<?php echo date('Y-m-d');?>" name="Desde" id="min">
                </div>
            </div>
        
        <div class="col-md-3">
            <div class="form-group">
                <label for="min">Hasta</label>
                <input type="date" value="<?php echo date('Y-m-d');?>" name="Hasta" id="min">
            </div>
        </div>
        </div>
    
@stop

@section('content')
    
    <a href="{{route('admin.ventas.create')}}"><button class="btn btn-primary">NUEVA VENTA<span></span></button></a>
    <a href="{{route('admin.ventas.reporte')}}"><button class="btn btn-dark">Imprimir PDF<span></span></button></a>
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "cliente">
        <thead>
            <tr>
                <th>id</th>
                <th>Usuario</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>cantidad</th>
                <th>total</th>
                <th>cambio</th>
                <th>Acciones</th>
                
                
            </tr>
        </thead>
        <tbody>
            
            @foreach($ventas as $ven)
            <tr>
                <td>{{$ven->ventas_id}}</td>
                <td>{{$ven->name}}</td>

                <td>{{$ven->ci}}</td>
                <td>{{$ven->n}}</td>

                <td>{{$ven->cantidad}}</td>
                <td>{{$ven->total}}</td>
                <td>{{$ven->cambio}}</td>
                <td>
                    <a href="{{route('admin.ventas.edit',$ven->ventas_id)}}" class="btn btn-info"><i class="material-icon">editar</i></a>
                    
                    <form action="{{route('admin.ventas.destroy',$ven->ventas_id)}}" method="post" style="display:inline">
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