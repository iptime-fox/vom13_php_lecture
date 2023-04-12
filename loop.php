<?php

  // 1. for
  $arr = [1,2,3,4,5,6];
  // echo var_dump($arr); // 아주 자세한 객체 정보
  // exit; // 코드 멈춤
  // echo print_r($arr); // 자세한 객체 정보
  // exit;
  // echo $arr; // 원시데이터 출력
  // exit;
 
  echo count($arr).'<br>'; // 배열의 갯수 확인 메서드

  // for (초기값; 증가조건; 증가연산)
  for($i=0; $i<count($arr); $i++){
    echo $i.' : '.$arr[$i].'<br>';
  }
  
  // 2. foreach
  foreach($arr as $value){ // $arr에 있는 요소 각각을 $value에 저장
    echo $value.'<br>';
  }
  
  // 3. while
  $num = 1; // 초기값
  $sum = 0; 
  while($num <= 100){ // 증가조건 : 실제 사이트 제작시 응답받은 데이터 유무를 조건으로 받는다.
    $sum += $num;
    $num++; // 증가연산

  }

  echo $sum;

?>