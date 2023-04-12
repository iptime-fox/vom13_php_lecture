<?php

  // php 함수는 자바스크립트와 같이 정의부와 호출부로 구성된다.

  // 정의부
  function sayHello(){
    echo '나라 바보~'.'<br>';

  };


  // 호출부
  sayHello();

  // while 
 function sumAllWhile($n){
    $num = 1;
    $sum = 0; 
    while($num <= $n){ 
      $sum += $num;
      $num++; 
    }
    echo $sum.'<br>';
 };
  sumAllWhile(50);

  // for
  function sumAll($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
      $sum += $i;
    }
    return $sum;
  }
  echo sumAll(1000).'<br>';

  ?>
