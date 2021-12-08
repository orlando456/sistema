<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inventario</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">-->
</head>

<body style="margin-top: 1cm; margin-right: 1.5cm; margin-left: 0cm;">
	
		
		<h5 style="text-align: center;">Reporte de Inventario</h5><br>
		<div style="text-align">Confecciones Fimoa</div>
           
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">Usuario</th>
                <th class="btn-dark">Producto</th>
                <th class="btn-dark">Precio Unitario</th>
                <th class="btn-dark">Precio Venta</th>
                <th class="btn-dark">CPP</th>
                <th class="btn-dark">Cantidad Entrada</th>
                <th class="btn-dark">Valor Entrada</th>
                <th class="btn-dark">Cantidad Salida</th>
                <th class="btn-dark">Valor Salida</th>
                <th class="btn-dark">Cantidad Saldo</th>
                <th class="btn-dark">Valor Saldo</th>
		    </tr>
		  </thead>
		  
		  <tbody>
            @foreach($inventario as $in)
            <tr>
                <td>{{$in->inventario_id}}</td>
                <td>{{$in->name}}</td>
                <td>{{$in->nombre}}</td>
                <td>{{$in->precio_unitario}}</td>
                <td>{{$in->precio_venta}}</td>
                <td>{{$in->precio_unitario*$in->cantidad/$in->cantidad}}</td>
                <td>{{$in->cantidad}}</td>
                <td>{{$in->precio_unitario*$in->cantidad}}</td>
                <td>{{$in->cantidadven}}</td>
                <td>{{$in->precio_unitario*$in->cantidad/$in->cantidad*$in->cantidadven}}</td>
                <td>{{$in->cantidad-$in->cantidadven}}</td>
                <td>{{$in->precio_unitario*$in->cantidad-$in->precio_unitario*$in->cantidad/$in->cantidad*$in->cantidadven}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</body>
</html>