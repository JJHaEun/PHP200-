<?php
  include $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';



  $sql = "
    SELECT name, userId FROM myMember
  ";
  $res = $dbConnect->query($sql);


  $dataCount = $res->num_rows;
  for ($i=0 ; $i < $dataCount; $i++) {
    $memberInfo = $res->fetch_assoc();

    echo "이름 : ".$memberInfo['name']."<br>";
    echo "아이디 : ".$memberInfo['userId']."<hr>";

  }


 ?>
