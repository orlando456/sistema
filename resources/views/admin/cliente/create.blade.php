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
        <div class="card-body btn-white">
            
        
    <table class="table table-striped" id = "cliente">
        <thead>
            <form action="{{route('admin.cliente.store')}}" method="POST">
                <div class="card-body">
                @csrf
                <div class="row">
                    <label from="Nombre" class="col-sm-2 col-form-label">Nombre:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre"> 
                    @if($errors->has('nombre'))
                        <span class="error text-darger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="apellido_paterno" class="col-sm-2 col-form-label">{{('Apellido Paterno: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido_paterno" placeholder="Ingrese su Apellido Paterno"> 
                    @if($errors->has('apellido_paterno'))
                        <span class="error text-darger" for="input-apellido_paterno">{{ $errors->first('apellido_paterno')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="apellido_materno" class="col-sm-2 col-form-label">{{('Apellido Materno: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="apellido_materno" placeholder="Ingrese su Apellido Materno"> 
                    @if($errors->has('apellido_materno'))
                        <span class="error text-darger" for="input-apellido_materno">{{ $errors->first('apellido_materno')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="tipo" class="col-sm-2 col-form-label">{{('tipo: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="tipo" placeholder="Seleccion Tipo de Cliente"> 
                    @if($errors->has('tipo'))
                        <span class="error text-darger" for="input-tipo">{{ $errors->first('tipo')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="ci" class="col-sm-2 col-form-label">{{('CI: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="ci" placeholder="Ingrese su Carnet de Identidad"> 
                    @if($errors->has('ci'))
                        <span class="error text-darger" for="input-ci">{{ $errors->first('ci')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="edad" class="col-sm-2 col-form-label">{{('Edad:')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="edad" placeholder="Ingrese su Edad"> 
                    @if($errors->has('edad'))
                        <span class="error text-darger" for="input-edad">{{ $errors->first('edad')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <label from="sexo" class="col-sm-2 col-form-label">{{('sexo: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="sexo" placeholder="Ingrese su sexo"> 
                    @if($errors->has('sexo'))
                        <span class="error text-darger" for="input-sexo">{{ $errors->first('sexo')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="nacionalidad" class="col-sm-2 col-form-label">{{('nacionalidad: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control " name="nacionalidad" placeholder="Ingrese su nacionalidad"> 
                    @if($errors->has('nacionalidad'))
                        <span class="error text-darger" for="input-nacionalidad">{{ $errors->first('nacionalidad')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="telefono" class="col-sm-2 col-form-label">{{('Telefono: ')}}</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese su Numero de Celular"> 
                    @if($errors->has('telefono'))
                        <span class="error text-darger" for="input-telefono">{{ $errors->first('telefono')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <td>
                    <a href=""><button class="btn btn-info" type="submit">GUARDAR<span></span></button></a>
                    <a href="{{route('admin.cliente.index')}}" class="btn btn-danger" type="submit">CANCELAR</a>
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