<?php

  // CRUD : create, read, update, delete

  // $_GET[name] // get 방식으로 넘어온 데이터
  // $_POST[name] // post 방식으로 넘어온 데이터

  $name = $_POST['name'];
  $id = $_POST['id'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];

  // echo $name, $id, $email, $pwd;

  include_once './dbconn.php'; // 외부 파일 가져오기 : require 사용 가능

  // 1. 데이터 입력
  // INSERT INTO [tablename](column1, column2....) VALUES (column value1, column value2....);
  // $sql = "INSERT INTO user (user_name, user_id, user_email, user_pwd) VALUES ('$name','$id','$email','$pwd')";

  // mysqli_query($db_conn, $sql); // 데이터베이스에 작업을 요청 : 첫번째 파라미터는 접속정보, 두번째 파라미터는 요청작업

  // 2. 데이터 조회 
  // SELECT [field name](* : 전체 조회) FROM [tablename];
  // $sql_select = "SELECT * FROM user";
  // $result = mysqli_query($db_conn, $sql_select);
  // var_dump ($result);
  // print_r($result);

  // 2-1. 데이터 필터링 조회
  // SELECT [field name](* : 전체 조회) FROM [tablename] WHERE [fieldname] = [fieldvalue];
  // $sql_select = "SELECT * FROM user WHERE user_idx = 6";
  // $result = mysqli_query($db_conn, $sql_select);

  // 2-2. 데이터 정렬 
  // SELECT [field name](* : 전체 조회) FROM [tablename]; ORDER BY [fieldname] DESC(역순), ASC(정순)
  // $sql_select = "SELECT * FROM user ORDER BY user_idx DESC";
  // $result = mysqli_query($db_conn, $sql_select);

  // 2-3. 데이터 갯수 지정 조회
  // SELECT [field name](* : 전체 조회) FROM [tablename] LIMIT [start index], [number(length)]
  // $sql_select = "SELECT * FROM user WHERE user_name = '이제똥' ORDER BY user_idx DESC LIMIT 4, 3";
  // $result = mysqli_query($db_conn, $sql_select);

  // 3. 데이터 업데이트
  // UPDATE [tablename] SET [fieldname] = [fieldvalue]: 업데이트 실행부 WHERE [fieldname] = [fieldvalue] : 업데이트 조건부
  // - 1번 데이터 이름을 김철수로 변경
  // - 변경된 데이터만 출력
  // $sql_update = "UPDATE user SET user_name = '김철수' WHERE user_idx = 1";
  // mysqli_query($db_conn, $sql_update);

  // $sql_select = "SELECT * FROM user WHERE user_idx = 1";
  // $result = mysqli_query($db_conn, $sql_select);
  // WHERE 필터링 조건 없이 업데이트만 한다면 업데이트 대상 필드의 모든 값이 지정 값으로 변경된다. 따라서 어떠한 데이터를 업데이트 하는지에 대한 필터링이 반드시 있어야 한다.

  // 4. 데이터 삭제 
  // DELETE FROM [tablename] WHERE [fieldname] = [fieldvalue];
  $sql_del = "DELETE FROM user WHERE user_name = '한나라'";
  mysqli_query($db_conn, $sql_del);

  $sql_select = "SELECT * FROM user";
  $result = mysqli_query($db_conn, $sql_select);
  // -- 중복된 이름 하나 선택해서 삭제
  // -- 전체 데이터 출력

  // print_r($row);
  while($row = mysqli_fetch_array($result)){
   $user_idx = $row['user_idx'];
   $user_id = $row['user_id'];
   $user_name = $row['user_name'];
   $user_email = $row['user_email'];


  

?>

<p>회원 번호 : <?=$user_idx?></p>
<p>회원 이름 : <?=$user_name?></p>
<p>회원 아이디 : <?=$user_id?></p>
<p>회원 이메일 : <?=$user_email?></p>
<hr>
<?php } ?>