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
                <th class="btn-dark">Id</th>
                <th class="btn-dark">Nombre</th>
                <th class="btn-dark">Apellido Paterno</th>
                <th class="btn-dark">CI</th>
                <th class="btn-dark">Fecha</th>
		    </tr>
		  </thead>
		  
		  <tbody>
            @foreach($cliente as $cli)
            <tr>
                <td>{{$cli->id_cliente}}</td>
                <td>{{$cli->nombre}}</td>
                <td>{{$cli->apellido_paterno}}</td>
                <td>{{$cli->ci}}</td>
                <td>{{$cli->created_at}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</body>
</html>