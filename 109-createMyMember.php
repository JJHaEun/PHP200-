<?php
  include $_SERVER['DOCUMENT_ROOT'].'/107-connectDB.php';

  $sql = "
    CREATE TABLE myMember(
      myMemberID int unsigned auto_increment comment '고객의 고유번호',
      userId varchar(15) not null comment '고객의 아이디',
      name varchar(10) not null comment '고객명',
      password varchar(30) not null comment '고객 비밀번호',
      phone varchar(13) not null comment '고객 휴대전화 번호',
      email varchar(30) not null comment '고객 이메일',
      birthDay char(10) not null comment '고객의 생일',
      gender enum('m','w','x') default 'x' comment '고객 성별',
      regTime datetime not null comment '회원가입 시간',
      primary key(myMemberID)
      )
      charset=utf8 comment='고객 정보 테이블';

  ";

  $res = $dbConnect->query($sql);

  if($res) {
    echo "테이블 생성 완료";
  } else {
    echo "테이블 생성 실패";
  }
 ?>
