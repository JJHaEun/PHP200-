<?php
  $host = "127.0.0.1";
  $user = "root";
  $password = "8vnnvjjj";
  $dbname = "php200Example";
  $dbConnect = new mysqli($host,$user,$password,$dbname);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_errno()) {
    echo "데이터베이스 {$dbname}에 접속 실패";

  }
 ?>
