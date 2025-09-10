<?php
  $host = "127.0.0.1";
  $user = "root";
  $password = "8vnnvjjj";
  
  $dbConnect = new mysqli($host,$user,$password);
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_errno()) {
    echo "데이터베이스  접속 실패";

  } else {
    $query = "CREATE DATABASE php200project";
    $res = $dbConnect->query($query);

    if($res) {
      echo "데이터베이스 생성 완료";
    } else {
      echo "데이터베이스 생성 실패";
    }
  }
 ?>
