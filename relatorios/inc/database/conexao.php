<?php
/**
 * Arquivo para conectar ao banco de dados
 * 
 * @author Alberto Souza <alberto.souza.99@gmail.com>
 * 
 */
 
require_once('dbConfig.php');
 
/**
 * 
 * 
 * 
 */
function dbGetMysqli(){
  $config = dbGetConfig();
  
  $mysqli = new mysqli($config['host'], $config['user'], $config['password'], $config['database']);
  if ($mysqli->connect_errno) {
      die( "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
  }
  //echo $mysqli->host_info . "\n";
  
  return $mysqli;
}
 

/**
 * 
 * @TODO resolver o erro no serialize no ultimo indice e retirar o @
 */
function dbGetTemas(){
  $mysqli = dbGetMysqli();
  $res = $mysqli->query("SELECT temas FROM ocs_wp_user");

  $temas = array();
  $temas['Sem resposta'] = 0;
  $temas['total'] = 0;
  $temasLabel = getTemasLabel();
  
  for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $temasDoUsuario = $res->fetch_assoc();
    @$temasDoUsuarioArray = unserialize( $temasDoUsuario['temas'] );
    
    if(!empty($temasDoUsuarioArray) && $temasDoUsuarioArray ){
      foreach($temasDoUsuarioArray as $tema ){
        if(empty($temas['data'][$temasLabel[$tema]]) ){
          $temas['data'][$temasLabel[$tema]] = 1;
          
        }else{
          $temas['data'][$temasLabel[$tema]]++;
        }

      }
      
    }else{
      $temas['Sem resposta'] ++;
    }
    
    $temas['total']++;
  }
  
  return $temas;
}


function getTemasLabel(){
  $temasLabel = array();
  $temasLabel['a'] = 'Práticas Tradicionais em Saúde' ;
  $temasLabel['b'] = 'Práticas integrativas e complementares em saúde' ;
  $temasLabel['c'] = 'Equidade em saúde e cultura' ;
  $temasLabel['d'] = 'Saúde Indígena' ;
  $temasLabel['e'] = 'Saúde Mental' ;
  $temasLabel['f'] = 'A Arte e o cuidado à saúde (promoção, prevenção e reestabelecimento da saúde)' ;
  $temasLabel['g'] = 'Controle social, participação e solidariedade' ;
  $temasLabel['h'] = 'Acesso a conhecimentos e expressões culturais tradicionais' ;
  $temasLabel['i'] = 'Necessidades de formação para apoiar a gestão, os serviços e as práticas na interface saúde e cultura' ;  
  
  return $temasLabel;
}


function getNaturezaAcaoLabel(){
  $temasLabel = array();
  $temasLabel['a'] = 'Profissional de Saúde' ;
  $temasLabel['b'] = 'Profissional de Educação' ;
  $temasLabel['c'] = 'Profissional de Cultura' ;
  $temasLabel['d'] = 'Cargo de Chefia na Adm. Pública' ;
  $temasLabel['e'] = 'Artista, Promotor Cultural, Artesão' ;
  $temasLabel['f'] = 'Militante de movimento social' ;
  $temasLabel['g'] = 'Estudante' ;
  $temasLabel['h'] = 'Pesquisador' ;
  $temasLabel['i'] = 'Voluntário' ;  
  
  return $temasLabel;
}


/*
 <td class="value">
  <input type="checkbox" name="naturezaatuacao" value="a">
  Profissional de Saúde
  <br>
  <input type="checkbox" name="naturezaatuacao" value="b">
  Profissional de Educação
  <br>
  <input type="checkbox" name="naturezaatuacao" value="c">
  Profissional de Cultura
  <br>
  <input type="checkbox" name="naturezaatuacao" value="d">
  Cargo de Chefia na Adm. Pública
  <br>
  <input type="checkbox" name="naturezaatuacao" value="e">
  Artista, Promotor Cultural, Artesão
  <br>
  <input type="checkbox" name="naturezaatuacao" value="f">
  Militante de movimento social
  <br>
  <input type="checkbox" name="naturezaatuacao" value="g">
  Estudante
  <br>
  <input type="checkbox" name="naturezaatuacao" value="h">
  Pesquisador
  <br>
  <input type="checkbox" name="naturezaatuacao" value="i">
  Voluntário
  <br>
  
    Outro, especifique: 
  <input type="text" name="naturezaatuacaooutro">
  <br>
</td>
 */ 

function dbGetInscritos(){
  $inscritos = array();

  $mysqli = dbGetMysqli();
  $res = $mysqli->query("SELECT
     name,email,naturezaatuacao,naturezaatuacaooutro,temas,participardarede,temas,cpf
      FROM ocs_wp_user
      ORDER BY name desc
      "
  );
  /*
  Coluna  Tipo  Collation Atributos Nulo  Padrão  Extra Ação
   1  username  text  latin1_swedish_ci   Não None      Alterar   Eliminar   Mais 
   2  password  text  latin1_swedish_ci   Não None      Alterar   Eliminar   Mais 
   3  name  text  latin1_swedish_ci   Não None      Alterar   Eliminar   Mais 
   4  email text  latin1_swedish_ci   Não None      Alterar   Eliminar   Mais 
   5  naturezaatuacao text  latin1_swedish_ci   Sim NULL      Alterar   Eliminar   Mais 
   6  naturezaatuacaooutro  text  latin1_swedish_ci   Sim NULL      Alterar   Eliminar   Mais 
   7  temas text  latin1_swedish_ci   Sim NULL      Alterar   Eliminar   Mais 
   8  participardarede  smallint(6)     Não 0     Alterar   Eliminar   Mais 
   9  cpf varchar(255)  latin1_swedish_ci   Sim NULL      Alterar   Eliminar   Mais 
   10 migrado
  */
  for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $inscritosArray = $res->fetch_assoc();
    $temasLabel = getTemasLabel();
    @$temasDoUsuarioArray = unserialize( $inscritosArray['temas'] );
    $userTema = '';
    
    
    $NaturezaLabel = getNaturezaAcaoLabel();
    @$NaturezaLabelArray = unserialize( $inscritosArray['naturezaatuacao']);
    $userNatureza = '';
    
    if(!empty($temasDoUsuarioArray) && $temasDoUsuarioArray ){
      //var_dump($temasDoUsuarioArray);
      foreach($temasDoUsuarioArray as $tema ){
          $userTema .= $temasLabel[$tema] . '; ';
      }
      
    }
    $inscritosArray['temas'] = $userTema; 
    
    
    if(!empty($NaturezaLabelArray) && $NaturezaLabelArray ){
      //var_dump($temasDoUsuarioArray);
      foreach($NaturezaLabelArray as $value ){
          $userNatureza .= $NaturezaLabel[$value] . '; ';
      }
      
    }
    $inscritosArray['naturezaatuacao'] = $userNatureza; 
 
    if($inscritosArray['participardarede']){
      $inscritosArray['participardarede'] = 'Sim';
    } else {
      $inscritosArray['participardarede'] = 'Não';
    }
    
    $inscritos[] = $inscritosArray;
    //var_dump($inscritosArray);
  }
  
  return $inscritos;
}

 
