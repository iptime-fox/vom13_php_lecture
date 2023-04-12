<?php

  // 세션은 쿠키와 비슷하지만 정보를 사용자 컴퓨터가 아닌 서버에 저장한다.
  // 웹브라우저 설정 시 쿠키를 차단하면 쿠키는 무용지물이 된다.(광고 관련)
  // 따라서 로그인 정보와 같은 민감한 정보를 저장할 때는 세션으로 저장하는 것이 일반적이다.
  // 세션을 저장하고 삭제할 때는 session_start() 함수를 먼저 작성해야 한다.

  session_start(); // 세션 사용 선언
  $_SESSION['userid'] = 'samoyed'; // 세션 값 저장

  if(isset($_SESSION['userid'])){ // 세션 존재 여부 확인
    $userid = $_SESSION['userid'];
  } else {
    $userid = '';
    echo '세션이 존재하지 않습니다.';
  }

  echo $userid;


?>

<?php if(isset($_SESSION['userid'])){ ?>
<p><?=$userid?>님 환영합니다.</p>
<?php } else { ?>
<p>로그인이 필요합니다.</p>
<?php } ?>

