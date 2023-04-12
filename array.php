<?php

  $arr = [1,2,3,4,5,'string'];
  echo $arr.'<br>';
  echo var_dump($arr).'<br>';
  echo print_r($arr).'<br>';

  echo count($arr).'<br>';

  // 배열에 여러 값을 한꺼번에 삽입하는 함수 : array_push(배열이름, [값......]);

  $countris = array();
  var_dump($countris).'<br>';

  array_push($countris, 'korea', 'england', 'italy');
  var_dump($countris).'<br>';
  print_r($countris).'<br>';

  $fruits = array('f1' => 'apple', 'f2' => 'banana');
  print_r($fruits).'<br>'; // 인덱스 문자는 숫자와 문자 모두 사용 가능하다. 데이터베이스를 읽을 때 주로 컬럼명을 인덱스로 받으면 해당 값을 받을 수 있다. 

  $fruits_json = json_encode(array('f1' => 'apple', 'f2' => 'banana'));
  echo $fruits_json.'<br>';
?>

