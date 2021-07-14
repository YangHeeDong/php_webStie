<?php
    $loginId = $_POST["loginId"];
    $loginPw = $_POST["loginPw"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $updateDate = date("Y-m-d (H:i)");
          
    $con = mysqli_connect("localhost", "root", "", "web_programing");
    $sql = "update members set loginPw='$loginPw', name='$name' , email='$email', updateDate='$updateDate'";
    $sql .= " where loginId='$loginId'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'member_mypage.php';
	      </script>
	  ";
?>