<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cliente</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">-->
</head>

<body style="margin-top: 1cm; margin-right: 1.5cm; margin-left: 0cm;">
	
		
		<h5 style="text-align: center;">Reporte de Clientes</h5><br>
		<div style="text-align">Confecciones Fimoa</div>
           
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
                <th class="btn-dark">id</th>
                <th class="btn-dark">Usuario</th>
                <th class="btn-dark">Producto</th>
                <th class="btn-dark">Cantidad</th>
                <th class="btn-dark">Precio</th>
                <th class="btn-dark">Total</th>
		    </tr>
		  </thead>
		  
		  <tbody>
            @foreach($compra as $com)
            <tr>
                <td>{{$com->compras_id}}</td>
                <td>{{$com->name}}</td>
                <td>{{$com->nombre}}</td>
                <td>{{$com->precio_unitario}}</td>
                <td>{{$com->cantidad}} Bs.</td>
                <td>{{$com->cantidad*$com->precio_unitario}} Bs.</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</body>
</html>