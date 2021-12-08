@extends('adminlte::page')
@section('title', 'Perfil Proveedor')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>Perfil Proveedor</h1>
        </div>
    </div>
</div>
@stop

@section('content')
    
    
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <p class="card-category">Datos del Proveedor {{ $proveedores->nombre }}</p>
            </div>
            <!--body-->
            <div class="card-body">
              @if (session('success'))
              <div class="alert alert-success" role="success">
                {{ session('success') }}
              </div>
              @endif
              <div class="row">
                
                
  
                <!--Start third-->
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="card-body">
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <tr>
                            <th>Nombre de la Organizacion</th>
                            <td>{{ $proveedores->nombre_empresa }}
                            </td>
                          </tr>
                          <tr>
                            <th>Nombre</th>
                            <td>{{ $proveedores->nombre }}</td>
                          </tr>
                          <tr>
                            <th>Direccion</th>
                            <td>{{ $proveedores->direccion }}</td>
                          </tr>
                          <tr>
                            <th>Apellido Paterno</th>
                            <td>{{ $proveedores->apellido_paterno }}</td>
                          </tr>
                          <tr>
                            <th>Apellido maternoo</th>
                            <td>{{ $proveedores->apellido_materno }}</td>
                          </tr>
                          <tr>
                            <th>email</th>
                            <td><span class="badge rounded-pill bg-dark text-white">{{ $proveedores->email }}</span></td>
                          </tr>
                          <tr>
                            <th>Ciudad</th>
                            <td>{{ $proveedores->ciudad}}</td>
                          </tr>
                          <tr>
                            <th>Edad</th>
                            <td>{{ $proveedores->edad }}</td>
                          </tr>
                          <tr>
                            <th>Telefono</th>
                            <td>{{ $proveedores->telefono }}</td>
                          </tr>
                          <tr>
                            <th>Estado</th>
                            <td>{{ $proveedores->estado }}</td>
                          </tr>
                          <tr>
                            <th>Fecha</th>
                            <td><a href="#" target="_blank">{{  $proveedores->created_at  }}</a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer">
                      <div class="button-container">
                        <a href="{{route('admin.proveedor.index')}}" class="btn btn-sm btn-danger" type="submit">Volver</a>
                        <a href="{{route('admin.proveedor.edit',$proveedores->proveedores_id)}}" class="btn btn-sm btn-primary"><i class="material-icon">Edit</i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end third-->
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-striped" class="btn btn-dark"  id = "users">
    <thead>
        <tr>
            <th class="btn-dark">id</th>
            <th class="btn-dark">nombre</th>
            <th class="btn-dark">apellido</th>
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($proveedores as $pro)
        <tr>
            <td>1</td>
            <td>name</td>
            <td>apellido</td>
            
            
        </tr>  
        @endforeach
    </tbody>
</table>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop