<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/php200project/163-connection.php';

$selectorList = array();
$selectorList = ['wrap','header','leftArea','rightArea','footer'];

foreach ($selectorList as $val) {
  $sql = "INSERT INTO controlCSS (selectorName, floata, width, height, background, marginTop, marginRight, marginBottom, marginLeft)
    VALUES ('{$val}','unset',0,0,'',0,0,0,0)
  ";
  $result = $dbConnect->query($sql);

  if($result){
    echo "셀렉터 {$val} 입력 성공";
  } else {
    echo "셀렉터 {$val} 입력 실패";
  }
  echo "<br>";
  // code...
}
 ?>
