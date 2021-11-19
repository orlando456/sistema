@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>registros de usuarios </h1>
@stop

@section('content')
    <p>REPOSTES </p>
    <p>-------</p>
    
    <div class="card ">
        <div class="btn btn-dark card-body">
            
        
    <table class="table table-striped" id = "usuario">
        <thead>
            <form action="{{route('admin.usuario.store')}}" method="POST">

                @csrf
                <div class="from-gruop">
                    <label from="name" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" class="form-control " name="name"> 

                </div>
                   
            
                <br>

                <div class="from-gruop">
                    <label from="email" class="control-label">{{('Email: ')}}</label> 
                    <input type="text" class="form-control " name="email"> 

                </div>

                
                <br>
                <label>
                    contraseña: 
                    <br>
                    <input type="text" name="password">
                </label>
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