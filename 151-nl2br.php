<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $sql = "SELECT * FROM prodReview ORDER BY prodReviewID DESC LIMIT 1";
  $res = $dbConnect->query($sql);

  $prodReview = $res->fetch_assoc();
  echo nl2br($prodReview['content']);
 ?>
