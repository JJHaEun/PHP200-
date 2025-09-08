<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

 $email = $_POST['email'];

 $emailVlidateCheck = filter_Var($email,FILTER_VALIDATE_EMAIL);

 if($emailVlidateCheck) {
   $sql = "SELECT email FROM myMember WHERE email = '{$email}'";
   $result = $dbConnect->query($sql);

   $dataCnt = $result->num_rows;

   $emailCheck = "none";
   if($dataCnt > 0) {
     $emailCheck = "exists";
   }

   echo json_encode(array("result" => $emailCheck));
 } else {
   echo json_encode(array("result" => "notEmail"));
 }
 ?>
