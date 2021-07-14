<meta charset='utf-8'>
<?php
    $sendId = $_POST["sendId"];

    $rvId = $_POST['rvId'];
    $title = $_POST['title'];
    $body = $_POST['body'];
	$title = htmlspecialchars($title, ENT_QUOTES);
	$body = htmlspecialchars($body, ENT_QUOTES);
	$regDate = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	if(!$sendId) {
		echo("
			<script>
			alert('로그인 후 이용해 주세요! ');
			history.go(-1)
			</script>
			");
		exit;
	}

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from members where loginId='$rvId'";
	$result = mysqli_query($con, $sql);
	$num_record = mysqli_num_rows($result);

	if($num_record)
	{
		$sql = "insert into message (sendId, rvId, title, body,  regDate) ";
		$sql .= "values('$sendId', '$rvId', '$title', '$body', '$regDate')";
		mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
	} else {
		echo("
			<script>
			alert('수신 아이디가 잘못 되었습니다!');
			history.go(-1)
			</script>
			");
		exit;
	}

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'member_message_box.php?mode=send';
	   </script>
	";
?>
