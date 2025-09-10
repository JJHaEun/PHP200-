<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/php200project/163-connection.php';

$selectorName = $_POST['selectorName'];

if($selectorName == "") {
  echo "값을 입력하세요";
}else {
  $float = $_POST['float'];
  $width = (int)$_POST['width'];
  $height = (int)$_POST['height'];
  $background = $_POST['background'];

  $marginTop = (int)$_POST['marginTop'];
  $marginRight = (int)$_POST['marginRight'];
  $marginBottom = (int)$_POST['marginBottom'];
  $marginLeft = (int)$_POST['marginLeft'];

  //update 할 것.
  $sql = "UPDATE controlCSS SET floata = '{$float}', width = '{$width}', height = '{$height}',
           background = '{$background}', marginTop = '{$marginTop}', marginRight = '{$marginRight}',
            marginBottom = '{$marginBottom}', marginLeft = '{$marginLeft}' WHERE selectorName = '{$selectorName}'
  ";

  $res = $dbConnect->query($sql);

  if($res){
    echo "변경 완료";
  }else{
    echo "실패";
  }

}

echo "<br>";
echo "<a href='index.php'>CSS 디자인 페이지로 이동</a>";
echo "<br>";
echo "<a href='168-controlPanel.php'>CSS 컨트롤 페이지로 이동</a>";

 ?>
