@extends('adminlte::page')
@section('title', 'reporte clientes')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@stop

@section('content_header')
    <h1>Registro Compras </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            
        
            <table class="table table-striped" id = "compra">
                <thead>
                    <form action="{{route('admin.compra.store')}}" method="POST">
        
                        
                        <div class="row col-md-12">
                                <div class="card-header estilo">
                                        <h4><b>Nueva Compra</b></h4>
                                </div><br>
                               
                                </div>		
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label>
                                                usuario:
                                                <select name="id" id="" class="from-control btn btn-1">
                                                    @foreach($users as $us)
                                                        <option value="{{$us->id}}">{{$us->name}}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                           
                                <label>
                                    producto:
                                    <select name="producto_id" id="" class="from-control btn btn-darger">
                                        @foreach($producto as $pro)
                                            <option value="{{$pro->producto_id}}">{{$pro->nombre}}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <label>
                                    Proveedor:
                                    <select name="proveedores_id" id="" class="from-control btn btn-white">
                                        @foreach($proveedores as $pro)
                                            <option value="{{$pro->proveedores_id}}">{{$pro->nombre}}</option>
                                        @endforeach
                                    </select>
                                </label>
                                <div class="row">
                                    <label from="precio_unitario" class="col-sm-2 col-form-label">{{('precio_unitario: ')}}</label> 
                                    <div class="col-sm-3">
                                    <input type="number" class="form-control " name="precio_unitario" placeholder="Ingrese la precio_unitario"> 
                                    @if($errors->has('precio_unitario'))
                                        <span class="error text-darger" for="input-precio_unitario">{{ $errors->first('precio_unitario')}}</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label from="cantidad" class="col-sm-2 col-form-label">{{('cantidad: ')}}</label> 
                                    <div class="col-sm-3">
                                    <input type="number" class="form-control " name="cantidad" placeholder="Ingrese la cantidad"> 
                                    @if($errors->has('cantidad'))
                                        <span class="error text-darger" for="input-cantidad">{{ $errors->first('cantidad')}}</span>
                                    @endif
                                    </div>
                                </div>
                                
                                  
                                <div class="row">
                                    <label from="total" class="col-sm-2 col-form-label">{{('total: ')}}</label> 
                                    <div class="col-sm-3">
                                    <input type="number" disabled class="form-control " name="total" id="totalcompra"> 
                                    @if($errors->has('total'))
                                        <span class="error text-darger" for="input-total">{{ $errors->first('total')}}</span>
                                    @endif
                                    </div>
                                </div>
                                <br>
                                <td>
                                    <a href=""><button class="btn btn-primary" type="submit">GUARDAR<span></span></button></a>
                                </td>
                             
                                
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                        <thead style="background-color: #A9D0F5">
                                            <th>Opciones</th>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>Precio Compra</th>
                                            <th>Subtotal</th>
                                        </thead>
                                        <tfoot>
                                            <th>TOTAL</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            
                                            
                                            <th><h4 id="tota">Bs. 0.00</h4><input type="hidden" name="tota" id="tota"></th>
                                        </tfoot>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        
                                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                                    <div class="form-group">
                                        <input name="_token" value="{{ csrf_token()}}" type="hidden">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                        <button class="btn btn-danger" type="reset">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
@stop



@section('js')
    <script> console.log('Hi!'); 
    
    $(document).ready(function(){
		$('#bt_add').click(function(){
			agregar();
		});
	});

	var cont=0;
	total=0;
	subtotal=[];
	$("#guardar").hide();
	$("#producto_id").change(mostrarValores);

	function mostrarValores(){
		datosProducto=document.getElementById('producto_id').value.split('_');
		$("#precio_unitario").val(datosProducto[1]);
	}

	function agregar(){
		datosProducto=document.getElementById('producto_id').value.split('_');

		producto_id=datosProducto[0];
		producto=$("#producto_id option:selected").text();
		cantidad=$("#cantidad").val();
		precio_compra=$("#precio_unitario").val();

		if (producto_id!="" && cantidad!="" && cantidad>0 && precio_unitario!="") {

			subtotal[cont]=(cantidad*precio_unitario);
			total=total+subtotal[cont];

			var fila='<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger" onclick="eliminar('+cont+');">X</button></td><td><input type="hidden" name="producto_id[]" value="'+producto_id+'">'+producto+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_unitario[]" value="'+precio_unitario+'"></td><td>'+subtotal[cont]+'</td></tr>'
			cont++;
			limpiar();
			$("#total").html("Bs. "+total);
			$("#total").val(total);
			evaluar();
			$('#detalles').append(fila);
		}
		else{
			alert("Error al ingresar el detalle del Ingreso, revise los datos");
		}
	}

	function limpiar(){
		$("#cantidad").val("");
		$("#precio_unitario").val("");
	}

	function evaluar(){
		if (total>0) {
			$("#guardar").show();
		}
		else{
			$("#guardar").hide();
		}
	}

	function eliminar(index){
		total=total-subtotal[index];
		$("#total").html("Bs. "+total);
		$("#total_unitario").val(total);
		$("#fila"+index).remove();
		evaluar();
	}

    </script>
    
@stop