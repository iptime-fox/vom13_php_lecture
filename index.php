<?php
  // echo 'Hello BEAR!!! 끼얏호';

  // php vs java

  // 변수
  // 연산
  // 배열
  // 함수
  // 반복문
  // 조건문
  // 시간 객체
  // 세션과 쿠키
  // statment
  // PDO class
  // 로그인
  // sql 문법
  // 로그인, 로그아웃, 상품 입력 등 실습

  
  session_start();
  if(isset($_SESSION['userid'])){ // 세션 존재 여부 확인
    $userid = $_SESSION['userid'];
  } else {
    $userid = '';
    echo '세션이 존재하지 않습니다.';
  }
?>

<?php if(isset($_SESSION['userid'])){ ?>
<p><?=$userid?>님 환영합니다.</p>
<?php } else { ?>
<p>로그인이 필요합니다.</p>
<?php } ?>

<button onclick='goLogOut()'>Go Log Out</button>
<script>
  function goLogOut(){
    location.href='logout.php';
  }
</script>