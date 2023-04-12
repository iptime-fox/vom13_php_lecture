<?php

  $dv = '----------------------<br><br>';

  $now_time = getdate();
  var_dump($now_time).'<br>';

  echo $dv;
  echo $dv;

  echo 'year : '.$now_time['year'].'<br>';
  echo 'month : '.$now_time['mon'].'<br>';
  echo 'date : '.$now_time['mday'].'<br>';
  echo 'hour : '.$now_time['hours'].'<br>';
  echo 'minutes : '.$now_time['minutes'].'<br>';
  echo 'second : '.$now_time['seconds'].'<br>';
  echo 'day-num : '.$now_time['wday'].'<br>';
  echo 'day-str : '.$now_time['weekday'].'<br>';
  echo 'month-str : '.$now_time['month'].'<br>';
  echo 'timestamp : '.$now_time[0].'<br>';
  echo 'day on year : '.$now_time['yday'].'<br>';

?>
