<?php
    session_start();
    if (isset($_SESSION["userId"])) $userId = $_SESSION["userId"];
    else $userId = "";
    if (isset($_SESSION["userName"])) $userName = $_SESSION["userName"];
    else $userName = "";

    if ( !$userId )
    {
        echo("
                    <script>
                    alert('게시판 글쓰기는 로그인 후 이용해 주세요!');
                    history.go(-1)
                    </script>
        ");
                exit;
    }

    $subject = $_POST["title"];
    $content = $_POST["body"];
    $boardId = $_POST["boardId"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);
	$content = htmlspecialchars($content, ENT_QUOTES);

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	
	$con = mysqli_connect("localhost", "root", "", "web_programing");

	$sql = "insert into article (mid, name,boardId, title, body, regDate, updateDate) ";
	$sql .= "values('$userId', '$userName','$boardId', '$subject', '$content', '$regist_day','$regist_day')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	mysqli_close($con);                // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'article_list.php?boardId=$boardId';
	   </script>
	";
?>