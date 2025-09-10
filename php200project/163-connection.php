<?php
  $host = "127.0.0.1";
  $user = "root";
  $password = "8vnnvjjj";
  $dbName = "php200project";

  $dbConnect = new mysqli($host,$user,$password,$dbName);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_errno()){
    echo  "데이터베이스 접속 실패";
  }
 ?>
