<?php
  include $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $sql = "
    ALTER TABLE myMember ADD currentAge int unsigned COMMENT '현재 나이' AFTER gender
  ";

  $res = $dbConnect->query($sql);

  if($res) {
    echo "필드 추가 완료";
  } else {
    echo "필드 추가 실패";
  }
 ?>
