@extends('adminlte::page')
@section('title', 'reporte ventas')

@section('content_header')
    <h1>REPORTES</h1>
@stop

@section('content')
    
  <html>
  <head>
      <!--Load the AJAX API-->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
  
          // Load the Visualization API and the corechart package.
          google.charts.load('current', { 'packages': ['corechart'] });
  
          // Set a callback to run when the Google Visualization API is loaded.
          google.charts.setOnLoadCallback(drawChart);
  
          // Callback that creates and populates a data table,
          // instantiates the pie chart, passes in the data and
          // draws it.
          function drawChart() {
  
              // Create the data table.
              var data = new google.visualization.DataTable();
              data.addColumn('string', 'mes');
              data.addColumn('number', 'Slices');
              data.addRows([
              @foreach($ventas as $ven)
              ['{{ $ven->cantidad }}', {{ $ven->total}}],
              @endforeach          
              ]);
  
          // Set chart options
          var options = {
              'width': 500,
              'height': 420
          };
  
          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
      </script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);
  
        function drawStuff() {
          var data = new google.visualization.arrayToDataTable([
            [' ', 'Cantidad'],
            @foreach($producto as $p)
              ['{{ $p->nombre }}', '{{ $p->stock}}'],
              @endforeach       
          ]);
  
          var options = {
            width: 500,
            colors: ['#1374a1'],
            legend: { position: 'none' },
            axes: {
              x: {
                0: { side: 'top'} // Top x-axis.
              }
            },
            bar: { groupWidth: "90%" }
          };
  
          var chart = new google.charts.Bar(document.getElementById('top_x_div'));
          // Convert the Classic options to Material options.
          chart.draw(data, google.charts.Bar.convertOptions(options));
        };
      </script>
      
      
      
  </head>
  <body>
          <div class="row">
                  <div class="col-md-6">
                          <div class="card">
                                  <div class="card-header estilo">
                                          <center><h4><b>PRODUCTOS EN ALMACEN</b></h4></center>
                                  </div>
                              <div class="card-body">
                           <div id="top_x_div" style="width: 500px; height: 400px;"></div>
                              </div>
                          </div>
                  </div>
                  <div class="col-md-6 ">
                          <div class="card">
                                  <div class="card-header estilo">
                                          <center><h4><b>VENTAS POR PRODUCTO</b></h4></center>
                                  </div>
                              <div class="card-body">
                                  <div id="chart_div"></div>
                              </div>
                          </div>
                         </div>
                  <div class="col-md-6">
                          <div class="card">
                                  <div class="card-header estilo">
                                          <center><h4><b>STOCK DE PRODUCTOS</b></h4></center>
                                  </div>
                              <div class="card-body">
                                 <div id="table_div"></div>
                              </div>
                          </div>
                  </div>
                  <div class="col-md-6">
                          <div class="card">
                                  <div class="card-header estilo">
                                          <center><h4><b>VENTAS POR CLIENTE</b></h4></center>
                                  </div>
                              <div class="card-body">
                                 <div id="donutchart"></div>
                              </div>
                          </div>
                  </div>
                    <div class="col-md-12">
                          <div class="card">
                                  <div class="card-header estilo">
                                          <center><h4><b>VENTAS POR MES</b></h4></center>
                                  </div>
                              <div class="card-body">
                                 <div id="curve_chart"></div>
                              </div>
                          </div>
                  </div>
             </div>
      <!--Div that will hold the pie chart-->
     <div class="row">
         
         <div class="col-md-6">
             
          
         </div>
     </div>
    
  </body>
  </html>
  
    
    
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    
@stop