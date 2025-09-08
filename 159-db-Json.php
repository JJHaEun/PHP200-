<?php
 require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

 $query = "SELECT * FROM myMember";
 $res = $dbConnect->query($query);

 $dataCnt = $res->num_rows;

 $memberList = array();

 for($i = 0 ;$i < $dataCnt; $i++){
   $memberInfo = $res->fetch_assoc();
   array_push($memberList,$memberInfo);
 }

 echo json_encode(array('data' => $memberList));
 ?>
