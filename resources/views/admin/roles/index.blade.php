@extends('adminlte::page')
@section('title', 'roles')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    
@stop

@section('content')
@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
    @endif
    
    <div class="col-md-12">
        <div class="card-header p-1 mb-1 bg-dark text-white">
            <div class="card-title p-1 mb-1 text-white">
            <h1>ROLES</h1>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            
            <a href="{{route('admin.roles.create')}}"><button class="btn btn-success">NUEVO ROL<span></span></button></a>
    <table class="table table-striped" id = "rol">
        <thead>
            <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">nombre</th>
                <th class="btn-dark">acciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($role as $ro)
            <tr>
                <td>{{$ro->id}}</td>
                <td>{{$ro->name}}</td>
                
                <td width="10px">
                    <a href="{{route('admin.roles.edit', $ro)}}"><button class="btn btn-primary">editar<span></span></button></a>
                    
                </td>
                <td width="10px">
                    
                    <form action="{{route('admin.roles.destroy',$ro)}}" method="post" style="display:inline">
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
        $('#rol').DataTable({
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