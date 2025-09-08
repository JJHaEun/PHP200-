<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

$sql = "CREATE TABLE prodReview(
  prodReviewId int unsigned auto_increment PRIMARY KEY COMMENT '리뷰의 고유번호',
  content tinytext COMMENT '리뷰 내용',
  regTime datetime not null COMMENT '리뷰 작성 날짜'
) CHARSET = utf8 COMMENT = '상품 리뷰'";

$res = $dbConnect->query($sql);

if($res){
  echo "테이블 생성 완료";
} else {
  echo "테이블 생성 실패";
}
 ?>
