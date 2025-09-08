<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $text = addslashes($_POST['text']);

  $sql = "INSERT INTO prodReview(myMemberID, content, regTime)
          VALUES (1,'{$text}',NOW())
  ";
  echo $sql;
  echo "<br>";

  $res = $dbConnect->query($sql);

  if($res){
    echo "입력 성공";
  } else {
    echo "입력 실패";
  }

 ?>
