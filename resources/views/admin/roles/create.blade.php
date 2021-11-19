@extends('adminlte::page')
@section('title', 'roles')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>lista ROLES</h1>
@stop

@section('content')
    

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.roles.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'ingrese un noevo rol']) !!}

            @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
                
            @enderror
        
        </div>
        <h2 class="h3">lisat de permisos</h2>
        @foreach($Permissions as $per)
        <div>
            <label>
                {!! Form::checkbox('Permissions[]', $per->id, null, ['class' => 'mr-1']) !!}
                {{$per->descripcion}}
            </label>
        </div>
            
        @endforeach


        {!! Form::submit('crear rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop