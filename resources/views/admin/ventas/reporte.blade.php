<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">-->
</head>

<body style="margin-top: 1cm; margin-right: 1.5cm; margin-left: 0cm;">
	
		
		<h5 style="text-align: center;">Reporte de Ventas</h5><br>
		<div style="text-align">Confecciones Fimoa</div>
           
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
                <th>id</th>
                <th>Usuario</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>cantidad</th>
                <th>total</th>
                <th>cambio</th>
		    </tr>
		  </thead>
		  
		  <tbody>
            @foreach($ventas as $ven)
            <tr>
                <td>{{$ven->ventas_id}}</td>
                <td>{{$ven->name}}</td>
                <td>{{$ven->ci}}</td>
                <td>{{$ven->n}}</td>
                <td>{{$ven->cantidad}}</td>
                <td>{{$ven->total}}</td>
                <td>{{$ven->cambio}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</body>
</html>