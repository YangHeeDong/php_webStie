<?php
    $loginId   = $_GET["loginId"];

	$sql = "delete from members where loginId = '$loginId'";
    $con = mysqli_connect("localhost", "root", "", "web_programing");

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'member_logout.php';
	      </script>
	  ";
?>