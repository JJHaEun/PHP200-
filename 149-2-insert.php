<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $uId = $_POST['userId'];
  $uName = $_POST['userName'];
  $uPw = $_POST['userPw'];
  $uPhone = $_POST['userPhone'];
  $uEmail = $_POST['userEmail'];
  $uBirthDay = $_POST['birthYear'].'-'.$_POST['birthMonth']."-".$_POST['birthDay'];
  $uGender = $_POST['userGender'];

  $sql = "INSERT INTO myMember (userId, name, password, phone, email, birthDay, gender, regTime)
          VALUES ('{$uId}','{$uName}','{$uPw}','{$uPhone}','{$uEmail}','{$uBirthDay}','{$uGender}',NOW())
  ";
  $res = $dbConnect->query($sql);

  if($res) {
    $sql2 = "SELECT userId, name  FROM myMember";
    $result = $dbConnect->query($sql2);

    $dataCount = $result->num_rows;

    for($i = 0 ; $i < $dataCount ; $i++){
      $memberInfo = $result->fetch_assoc();
      echo "아이디 : ".$memberInfo['userId'];
      echo "<br>";
      echo "이름 : ".$memberInfo['name'];
      echo "<hr>";
    }
  } else {
    echo "입력 실패";
  }

 ?>
