<?php

  session_start();
  unset($_SESSION['userid']); // 세션 삭제

  echo "
    <script>
      location.href='index.php';
    </script>
  ";

?>