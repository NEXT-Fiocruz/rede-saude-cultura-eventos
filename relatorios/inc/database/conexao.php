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

/*
 * 
 <td class="value">
    <input type="checkbox" name="temas[]" value="e">Saúde Mental<br>
    <input type="checkbox" name="temas[]" value="f">A Arte e o cuidado à saúde (promoção, prevenção e reestabelecimento da
saúde)<br>
    <input type="checkbox" name="temas[]" value="g">Controle social, participação e solidariedade<br>
    <input type="checkbox" name="temas[]" value="h">Acesso a conhecimentos e expressões culturais tradicionais<br>
    <input type="checkbox" name="temas[]" value="i">Necessidades de formação para apoiar a gestão, os serviços e as práticas na
interface saúde e cultura<br>  
  <br>
  </td>
 * 
 */
