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
        <h1>Perfil</h1>
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
              <p class="card-category">Vista detallada del usuario: {{ $users->name }}</p>
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
                          <h5> {{ $users->name }} </h5><br>
                          {{ $users->email }} <br>
                          {{ $users->created_at }}
                          </p>
                        </div>
                      </p>
                      <div class="card-description">
                         El usuario forma parte de la empresa
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
                            <td>{{ $users->id }}
                            </td>
                          </tr>
                          <tr>
                            <th>Name</th>
                            <td>{{ $users->name }}</td>
                          </tr>
                          <tr>
                            <th>Email</th>
                            <td><span class="badge badge-primary">{{ $users->email }}</span></td>
                          </tr>
                          
                          <tr>
                            <th>Fecha</th>
                            <td><a href="#" target="_blank">{{  $users->created_at  }}</a></td>
                          </tr>
                          <tr>
                              <th>Roles</th>
                              <td>
                                  @forelse ($users->roles as $role)
                                      <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                                  @empty
                                      <span class="badge badge-danger bg-danger">No roles</span>
                                  @endforelse
                              </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="card-footer">
                      <div class="button-container">
                        <a href="{{route('admin.usuario.index')}}" class="btn btn-sm btn-danger" type="submit">Volver</a>
                        <a href="{{route('admin.usuario.edit',$users->id)}}" class="btn btn-sm btn-primary"><i class="material-icon">Edit</i></a>
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
            <th class="btn-dark">email</th>
            
            
        </tr>
    </thead>
    <tbody>

        @foreach($users as $us)
        <tr>
            <td>1</td>
            <td>name</td>
            <td>email</td>
            
            
        </tr>  
        @endforeach
    </tbody>
</table>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop