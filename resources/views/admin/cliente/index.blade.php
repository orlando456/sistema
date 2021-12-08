@extends('adminlte::page')
@section('title', 'cliente')


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
                    <h1>CLIENTES</h1>
                    </div>
                </div>
            </div>
    
        
    
    <div class="card">
        <div class=" card-body ">
            
        
    <table class="table table-striped" class="btn btn-dark"  id = "cliente">
        <a href="{{route('admin.cliente.create')}}"><button class="btn btn-success">NUEVO REGISTRO<span></span></button></a>
        <a href="{{route('admin.cliente.Reporte')}}"><button class="btn btn-dark">Imprimir PDF<span></span></button></a>
        <thead>
            <tr>
                <th class="btn-dark">Id</th>
                <th class="btn-dark">Nombre</th>
                <th class="btn-dark">Apellido Paterno</th>
                <th class="btn-dark">CI</th>
                <th class="btn-dark">Fecha</th>
                <th class="btn-dark">Acciones</th>
                
            </tr>
        </thead>
        <tbody>

            @foreach($cliente as $cli)
            <tr>
                <td>{{$cli->id_cliente}}</td>
                <td>{{$cli->nombre}}</td>
                <td>{{$cli->apellido_paterno}}</td>
                <td>{{$cli->ci}}</td>
                <td>{{$cli->created_at}}</td>
                <td class="td-actions text-right">

                    
                    <a href="{{route('admin.cliente.edit',$cli->id_cliente)}}" class="btn btn-info"><i class="material-icon">Editar</i></a>
                    <a href="{{route('admin.cliente.show',$cli->id_cliente)}}" class="btn btn-sm btn-info"><i class="material-icon">perfil</i></a>
                    <form action="{{route('admin.cliente.destroy',$cli->id_cliente)}}" class="d-inline formulario-eliminar" method="post" style="display:inline">
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <script>
        $('.formulario-eliminar').submit(function(e)){
            e.preventDefault();
        }
Swal.fire({
  title: '¿Estas seguro?',
  text: "los datos se eliminaran definitivamente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
    </script>
@stop