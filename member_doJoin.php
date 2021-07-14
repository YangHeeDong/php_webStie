<?php
    $loginId   = $_POST["loginId"];
    $loginPw = $_POST["loginPw"];
    $name = $_POST["name"];
    $email  = $_POST["email"];

    $regDate = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $con = mysqli_connect("localhost", "root", "", "web_programing");

	$sql = "insert into members(loginId, loginPw, name, email, regDate, updateDate) ";
	$sql .= "values('$loginId', '$loginPw', '$name', '$email', '$regDate', '$regDate')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'home.php';
	      </script>
	  ";
?>