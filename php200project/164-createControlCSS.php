<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/php200project/163-connection.php';

  $sql = "CREATE TABLE controlCSS(
    controlCSSID int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    selectorName enum('wrap','header','leftArea','rightArea','footer') NOT NULL,
    floata enum('left','right','none','unset') DEFAULT NULL,
    width int(11) DEFAULT NULL,
    height int(11) DEFAULT NULL,
    background varchar(10) DEFAULT NULL,
    marginTop int(11) DEFAULT NULL,
    marginRight int(11) DEFAULT NULL,
    marginBottom int(11) DEFAULT NULL,
    marginLeft int(11) DEFAULT NULL
  ) CHARSET = utf8";

  $res = $dbConnect->query($sql);

  if($res) {
     echo "테이블 생성 완료";
   } else {
     echo "테이블 생성 실패";
   }
 ?>
