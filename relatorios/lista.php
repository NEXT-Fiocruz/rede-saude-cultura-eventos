
<?php
  include('inc/database/conexao.php');
  
  $inscritos = dbGetInscritos();
  //var_dump($inscritos);
  
  //exit;
?>


<html>
  <?php include('head.php'); ?>

  <body>
    <div id="wrap">
      <div class="container">
        
      <div id="page-header">
        <h1>
          Lista de inscritos da 1ª Semana de Ciência, Cultura e Saúde
        </h1>
      </div>
    <!--Div that will hold the pie chart-->
      
      <table border="1">
        <tr>
          <th> </th>
          <th>Nome</th>
          <th>Email</th>
          <th>Natureza da Atuação</th>
          <th>Natureza Atuação Outro</th>
          <th>Temas</th>
          <th>Participar da Rede</th>
          <th>cpf</th>
        </tr>
        
        <?php foreach( $inscritos as $indice => $inscrito){ ?>
        <tr>
          <th><?php print $indice+1; ?></th>
          <td><?php print $inscrito['name']; ?></td>
          <td><?php print $inscrito['email']; ?></td>
          <td><?php print $inscrito['naturezaatuacao']; ?></td>
          <td><?php print $inscrito['naturezaatuacaooutro']; ?></td>
          <td><?php print $inscrito['temas']; ?></td>
          <td><?php print $inscrito['participardarede']; ?></td>
          <td><?php print $inscrito['cpf']; ?></td>
        </tr>
        
        <?php } ?>
      </table>
        
        
        
      </table>
    
      </div>
      
           
    </div>
    
    <div id="push"></div> 
    <?php include('footer.php'); ?>
    
     <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>