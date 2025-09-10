<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/php200project/163-connection.php';

  $sql = "CREATE TABLE MEMBER (
    MEMBER_ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    EMAIL VARCHAR(50) UNIQUE NOT NULL,
    NICKNAME VARCHAR(10) NOT NULL,
    PW VARCHAR(50) DEFAULT NULL,
    BIRTHDAY VARCHAR(10) NOT NULL,
    REG_TIME INT(11) NOT NULL
  ) CHARSET=UTF8
  ";

  $res = $dbConnect->query($sql);

  if($res){
    echo "테이블 생성 완료";
  }else {
    echo "테이블 생성 실패";
  }
 ?>
