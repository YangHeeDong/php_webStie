<meta charset='utf-8'>
<?php
    $num = $_GET["num"];
    $mode = $_GET["mode"];

	$con = mysqli_connect("localhost", "root", "", "web_programing");

	$sql = "delete from message where id=$num";
	mysqli_query($con, $sql);

	mysqli_close($con);                // DB 연결 끊기

	if($mode == "send")
		$url = "member_message_box.php?mode=send";
	else
		$url = "member_message_box.php?mode=rv";

	echo "
	   <script>
	    location.href = '$url';
	   </script>
	";
?>