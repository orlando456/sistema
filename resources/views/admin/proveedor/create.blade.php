@extends('adminlte::page')
@section('title', 'Registro Proveedor')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>REGISTRO PROVEEDORES</h1>
        </div>
    </div>
</div>
@stop

@section('content')
    
    
    <div class="card ">
        <div class="btn btn-white card-body">
            
        
    <table class="table table-striped" id = "proveedor">
        <thead>
            <form action="{{route('admin.proveedor.store')}}" method="POST">

                @csrf
                <div class="row">
                    <label from="Nombre" class="col-sm-2 col-form-label">Nombre de Empresa:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre_empresa" placeholder="Ingrese el Nombre de la Empresa"> 
                    @if($errors->has('nombre_empresa'))
                        <span class="error text-darger" for="input-nombre_empresa">{{ $errors->first('nombre_empresa')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="Nombre" class="col-sm-2 col-form-label">Nombre del Propietario:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre del propietario"> 
                    @if($errors->has('nombre'))
                        <span class="error text-darger" for="input-nombre">{{ $errors->first('nombre')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <label from="Apellido_paterno" class="col-sm-2 col-form-label">A. Paterno:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido_paterno" placeholder="Ingrese el Apellido Paterno"> 
                    @if($errors->has('apellido_paterno'))
                        <span class="error text-darger" for="input-apellido_paterno">{{ $errors->first('apellido_paterno')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="Apellido_materno" class="col-sm-2 col-form-label">A. Materno:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="apellido_materno" placeholder="Ingrese el Apellido Materno"> 
                    @if($errors->has('apellido_materno'))
                        <span class="error text-darger" for="input-apellido_materno">{{ $errors->first('apellido_materno')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="nit" class="col-sm-2 col-form-label">nit:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="nit" placeholder="Ingrese el Numero de nit"> 
                    @if($errors->has('nit'))
                        <span class="error text-darger" for="input-nit">{{ $errors->first('nit')}}</span>
                    @endif
                    </div> 
                </div>
                <br>
                <div class="row">
                    <label from="ci" class="col-sm-2 col-form-label">Carnet de Identidad:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="ci" placeholder="Ingrese el Numero de Documento"> 
                    @if($errors->has('ci'))
                        <span class="error text-darger" for="input-ci">{{ $errors->first('ci')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="direccion" class="col-sm-2 col-form-label">Direccion:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="direccion" placeholder="Ingrese la direccion de la Empresa"> 
                    @if($errors->has('direccion'))
                        <span class="error text-darger" for="input-direccion">{{ $errors->first('direccion')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="edad" class="col-sm-2 col-form-label">Edad:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="edad" placeholder="Ingrese la Edad"> 
                    @if($errors->has('edad'))
                        <span class="error text-darger" for="input-edad">{{ $errors->first('edad')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="email" class="col-sm-2 col-form-label">Email :</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="email" placeholder="Ingrese el Email"> 
                    @if($errors->has('email'))
                        <span class="error text-darger" for="input-email">{{ $errors->first('email')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="ciudad" class="col-sm-2 col-form-label">Ubicación:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="ciudad" placeholder="Ingrese el Ciudad de la Empresa"> 
                    @if($errors->has('ciudad'))
                        <span class="error text-darger" for="input-ciudad">{{ $errors->first('ciudad')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="telefono" class="col-sm-2 col-form-label">Telefono:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese el Numero de Telefono"> 
                    @if($errors->has('telefono'))
                        <span class="error text-darger" for="input-telefono">{{ $errors->first('telefono')}}</span>
                    @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <label from="estado" class="col-sm-2 col-form-label">Estado:</label> 
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="estado" placeholder="Ingrese el Estado"> 
                    @if($errors->has('estado'))
                        <span class="error text-darger" for="input-estado">{{ $errors->first('estado')}}</span>
                    @endif
                    </div>
                </div>
                <br>
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