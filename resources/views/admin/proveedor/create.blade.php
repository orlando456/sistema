@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>registro de proveedores </h1>
@stop

@section('content')
    <p>REPOSTES </p>
    <p>-------</p>
    
    <div class="card ">
        <div class="btn btn-dark card-body">
            
        
    <table class="table table-striped" id = "proveedor">
        <thead>
            <form action="{{route('admin.proveedor.store')}}" method="POST">

                @csrf
                <div class="from-gruop">
                    <label from="Nombre" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" class="form-control" name="nombre"> 
                </div>
                <br>
                <div class="from-gruop">
                    <label from="apellido_paterno" class="control-label">{{('Apellido Paterno: ')}}</label> 
                    <input type="text" class="form-control " name="apellido_paterno"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="apellido_materno" class="control-label">{{('Apellido Materno: ')}}</label> 
                    <input type="text" class="form-control " name="apellido_materno"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="ci" class="control-label">{{('CI: ')}}</label> 
                    <input type="text" class="form-control " name="ci"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="edad" class="control-label">{{('Edad:')}}</label> 
                    <input type="text" class="form-control" name="edad"> 

                </div>
                <br>
                <div class="from-gruop">
                    <label from="telefono" class="control-label">{{('Telefono: ')}}</label> 
                    <input type="text" class="form-control" name="telefono"> 

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