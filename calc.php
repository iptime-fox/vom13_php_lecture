<?php

  // 연산은 기본적으로 자바스크립트와 동일하다.
  $sum = 5+"6";  // php에서는 더하기에서도 암묵적 형변환 된다...헐~
  $minus = 6-5;
  $times = 6*5;
  $divide = 6/5;
  $percent = 6%5;


  echo $sum.'<br>' .$minus.'<br>'. $times.'<br>'. $divide.'<br>' .$percent.'<br>';

  $a = 5;

  if($a % 2 == 0){ // php에서는 주로 2개로 된 이퀄을 사용한다. 
    echo '짝수지롱~';
  } else{
    echo '홀수일껄~?';
  }



?>
