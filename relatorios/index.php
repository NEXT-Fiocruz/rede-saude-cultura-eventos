
<?php
  include('inc/database/conexao.php');
  
  $temas = dbGetTemas();
  
  $temasJson = '[';
  $temasTable = '';
  
  /*        data.setCell(0, 0, 'John');
        data.setCell(0, 1, 10000, '$10,000');
   * 
   */
  $contagem = 0;
  foreach($temas['data'] as $tema => $valor){
    $temasJson .= "['$tema', $valor], ";
    
    $temasTable .= "data.setCell($contagem, 0, '$tema');\n";
    $temasTable .= "data.setCell($contagem, 1, $valor);\n";
    
    $contagem++;
  }
  $temasJson .= ']';  
  //var_dump($temasJson);
  
  
  
?>


<html>
  <?php include('head.php'); ?>

  <body>
    <div id="wrap">
      <div class="container">
        
      <div id="page-header">
        <h1>
          Relatório da 1ª Conexão Internacional de Saúde e (Ciber) Cultura
        </h1>
      </div>
    <!--Div that will hold the pie chart-->
    <h4>Temas escolhidos pelos inscritos:</h4>
    
    <div id="table_div"></div>
    <p><em>Tabela ordenavel, clique nas colunas para ordenar</em></p>

    <div id="chart_div"></div>
    <p><em>Grafico interativo, passe o mouse em cima do grafico para exibir as informações</em></p>
    
    
    <p class="lead">
      <br/>
      <p><strong>Observação:</strong> Cada inscrito pode escolher mais de 1 opção.</p>
    
      <p>O total de usuários inscritos é: <?php print $temas['total']; ?> .</p>
      <br/>    
    </p>
    
    </div>
      
           
    </div>
    
    <div id="push"></div> 
    <?php include('footer.php'); ?>
    
     <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>