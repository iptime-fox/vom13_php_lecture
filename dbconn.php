<?php

  // 기존에 사용하던 레거시 방식
  $host = 'localhost'; // host 이름
  $db_id = 'root'; // 데이터베이스 아이디
  $db_pass = ''; // 데이터베이스 비밀번호
  $db_name = 'test'; // 데이터베이스 이름

  $db_conn = mysqli_connect($host, $db_id, $db_pass, $db_name); // 작성 순서 유지

?>