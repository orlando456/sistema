@extends('adminlte::page')
@section('title', 'editar proveedor')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>EDITAR CLIENTES </h1>
@stop

@section('content')
    <p> </p>
    <p>-------</p>
    
    <div class="card">
        <div class="card-body">
            
        
    <table class="table table-striped" id = "proveedor">
        <thead>
            <form action="{{route('admin.producto.update',$producto->producto_id)}}" method="POST">

                @csrf
                @method('put')

                <label>
                    Tipo:
                    <select name="tipo_id" id="" class="from-control btn btn-dark">
                        @foreach($tipodeproducto as $tipo)
                         @if($tipo->tipo_id==$producto->tipo_id)   
                            <option value="{{$tipo->tipo_id}}" selected>{{$tipo->nombre}}</option>
                         @else
                         <option value="{{$tipo->tipo_id}}">{{$tipo->nombre}}</option>
                         @endif
                        @endforeach
                    </select>
                </label>

                <label>
                    proveedor:
                    <select name="proveedores_id" id="" class="from-control btn btn-dark">
                        @foreach($proveedores as $pro)
                         @if($pro->proveedores_id==$producto->proveedores_id)   
                            <option value="{{$pro->proveedores_id}}" selected>{{$pro->nombre}}</option>
                         @else
                         <option value="{{$pro->proveedores_id}}">{{$pro->nombre}}</option>
                         @endif
                        @endforeach
                    </select>
                </label>

                <div class="from-gruop">
                    <label from="Nombre" class="control-label">{{('Nombre: ')}}</label> 
                    <input type="text" name="nombre" value="{{$producto->nombre}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="precio" class="control-label">{{('precio: ')}}</label> 
                    <input type="text" name="precio" value="{{$producto->precio}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="logotipo" class="control-label">{{('logotipo: ')}}</label> 
                    <input type="text" name="logotipo" value="{{$producto->logotipo}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="tela" class="control-label">{{('tela: ')}}</label> 
                    <input type="text" name="tela" value="{{$producto->tela}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="precio" class="control-label">{{('precio: ')}}</label> 
                    <input type="text" name="precio" value="{{$producto->precio}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="talla" class="control-label">{{('talla: ')}}</label> 
                    <input type="text" name="talla" value="{{$producto->talla}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="color" class="control-label">{{('color: ')}}</label> 
                    <input type="text" name="color" value="{{$producto->color}}">
                </div>    
                <br>
                <div class="from-gruop">
                    <label from="descripcion" class="control-label">{{('descripcion: ')}}</label> 
                    <input type="text" name="descripcion" value="{{$producto->descripcion}}">
                </div>    
                <br>

                <td>
                    <a href=""><button class="btn btn-primary" type="submit">EDITAR<span></span></button></a>
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