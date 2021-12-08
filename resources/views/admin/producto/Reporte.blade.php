<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Productos</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!--<link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">-->
</head>

<body style="margin-top: 1cm; margin-right: 1.5cm; margin-left: 0cm;">
	
		
		<h5 style="text-align: center;">Repor te de Productos</h5><br>
		<div style="text-align">Confecciones Fimoa</div>
           <div>NIT:  10003213 <div style="text-align">telefono (602) 519-0450</div> </div>
		  <div><a href="mailto:company@example.com">Fimoa@gmail.com</a></div>
	<div class="container">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th>Id</th>
              <th>tipo</th>
              <th>proveedor</th>
              <th>Nombre</th>
              <th>precio</th>
              <th>talla</th>
              <th>color</th>
              <th>stock</th>
		    </tr>
		  </thead>
		  
		  <tbody>
            @foreach($producto as $pr)
		    <tr>
                <td>{{$pr->producto_id}}</td>
                <td><h6>{{$pr->nombre}}</h6></td>
                <td><h6><h6>{{$pr->prove}}</h6></h6></td>
                <td>{{$pr->nombr}}</td>
                <td>{{$pr->precio_venta}}</td>
                <td>{{$pr->talla}}</td>
                <td>{{$pr->color}}</td>
                <td>{{$pr->stock}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</body>
</html>