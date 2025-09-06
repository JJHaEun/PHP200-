<?php
  include $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $member = array();

  $member[0] = "('miu', '김미우', 'miupw', '010-1234-5667', 'miu@everdevel.com', '2007-01-09', 'w', NOW())";
  $member[1] = "('yuna', '김유나', 'yunapw', '010-1234-6789', 'yuna@everdevel.com', '2011-12-05', 'w', NOW())";
  $member[2] = "('minhoo', '김민후', 'minhoopw', '010-1234-4467', 'minhoo@everdevel.com', '2012-12-23', 'm', NOW())";

  $sql = "
    INSERT INTO myMember (userId, name, password, phone, email, birthDay, gender,  regTime) VALUES
  ";

  foreach ($member as $val) {
    $query = $sql.$val;
    $res = $dbConnect->query($query);

    if($res) {
      echo "데이터 입력 완료";
    } else {
      echo "데이터 입력 실패";
    }

  }


 ?>
