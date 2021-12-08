@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
<div class="col-md-12">
    <div class="card-header p-1 mb-1 bg-dark text-white">
        <div class="card-title p-1 mb-1 text-white">
        <h1>Perfil Cliente</h1>
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
              <p class="card-category">Datos del Cliente: {{ $cliente->nombre }}</p>
            </div>
            <!--body-->
            <div class="card-body">
              @if (session('success'))
              <div class="alert alert-success" role="success">
                {{ session('success') }}
              </div>
              @endif
              <div class="row">
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="card-body">
                      <p class="card-text">
                        <div class="author">
                          <a href="#">
                            <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                            
                          </a>
                          <p class="description">
                          <h5> {{ $cliente->nombre }} </h5><br>
                          {{ $cliente->apellido_paterno }} <br>
                          {{ $cliente->apellido_materno }} <br>
                          {{ $cliente->ci }} <br>
                          {{ $cliente->edad }} <br>
                          {{ $cliente->nacionalidad }} <br>
                          {{ $cliente->telefono }} <br>
                          {{ $cliente->created_at }}
                          </p>
                        </div>
                      </p>
                      <div class="card-description">
                         el presente es un cliente de la empresa Fimoa
                      </div>
                    </div>
                    
                  </div>
                </div><!--end card user-->
  
                
  
                <!--Start third-->
                <div class="col-md-4">
                  <div class="card card-user">
                    <div class="card-body">
                      <table class="table table-bordered table-striped">
                        <tbody>
                          <tr>
                            <th>ID</th>
                            <td>{{ $cliente->id_cliente }}
                            </td>
                          </tr>
                          <tr>
                            <th>Nombre</th>
                            <td>{{ $cliente->nombre }}</td>
                          </tr>
                          <tr>
                            <th>Apellido Paterno</th>
                            <td><span class="badge badge-primary">{{ $cliente->apellido_paterno }}</span></td>
                          </tr>
                          <tr>
                            <th>Apellido Materno</th>
                            <td>{{ $cliente->apellido_materno }}</td>
                          </tr>
                          <tr>
                            <th>Tipo</th>
                            <td>{{ $cliente->tipo }}</td>
                          </tr>
                          <tr>
                            <th>Region</th>
                            <td>{{ $cliente->nacionalidad }}</td>
                          </tr>
                          <tr>
                            <th>Edad</th>
                            <td>{{ $cliente->edad }}</td>
                          </tr>
                          <tr>
                            <th>Sexo</th>
                            <td>{{ $cliente->sexo }}</td>
                          </tr>
                          <tr>
                            <th>Telefono</th>
                            <td>{{ $cliente->telefono }}</td>
                          </tr>
                          <tr>
                            <th>Fecha</th>
                            <td><a href="#" target="_blank">{{  $cliente->created_at  }}</a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer">
                      <div class="button-container">
                        <a href="{{route('admin.cliente.index')}}" class="btn btn-sm btn-danger" type="submit">Volver</a>
                        <a href="{{route('admin.cliente.edit',$cliente->id_cliente)}}" class="btn btn-sm btn-primary"><i class="material-icon">Edit</i></a>
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
            <th class="btn-dark">Usuario</th>
            <th class="btn-dark">Producto</th>
            <th class="btn-dark">Precio</th>
        </tr>
    </thead>
    <tbody>

        @foreach($cliente as $cli)
        <tr>
            <td>1</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->edad }}</td>
            
            
        </tr>  
        @endforeach
    </tbody>
</table>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop