<?php
  header("Content-type: text/css");

  require_once $_SERVER['DOCUMENT_ROOT'].'/php200project/163-connection.php';

  $sql = "SELECT * FROM controlCSS";
  $result = $dbConnect->query($sql);


  $dataCnt = $result->num_rows;

  $cssSource = '';

  for($i = 0; $i < $dataCnt; $i++){
    $cssInfo = $result->fetch_assoc();
    $cssSource .= "#".$cssInfo['selectorName']."{float:".$cssInfo['floata']."; width:".$cssInfo['width']."px; height:".$cssInfo['height']."px; background:".
      $cssInfo['background']."; margin-top:".$cssInfo['marginTop']."px; margin-right:".$cssInfo['marginRight']."px; margin-bottom:".$cssInfo['marginBottom']."px; margin-left:".$cssInfo['marginLeft']."px; }";
  }

  echo $cssSource;
 ?>
