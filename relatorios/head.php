  <head>
    <meta charset="UTF-8">
    <title>Dados da 1ª Semana de Ciência, Cultura e Saúde</title>
    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet"> 
     
    <link href="css/estilos.css" rel="stylesheet">  
       
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.

      
      google.setOnLoadCallback(drawChart);
        

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Temas');
        data.addColumn('number', 'Escolhas');
        data.addRows(<?php print $temasJson; ?>);

        // Set chart options
        var options = {'title':'Grafico com os temas escolhidos', 
                       'width':700,
                       'height':450};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      
      google.setOnLoadCallback(drawTable);
      google.load('visualization', '1', {packages:['table']});
      
      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Temas');
        data.addColumn('number', 'Quantidade de escolhas');
        data.addRows(9);
        
        <?php print $temasTable; ?>
      
        var table = new google.visualization.Table(document.getElementById('table_div'));
        table.draw(data, {showRowNumber: true});
      
        google.visualization.events.addListener(table, 'select', function() {
          var row = table.getSelection()[0].row;
          alert('Você selecionou o tema: ' + data.getValue(row, 0));
        });
      }

    </script>
  </head>