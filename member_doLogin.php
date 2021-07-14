<?php
    $loginId   = $_POST["loginId"];
    $loginPw = $_POST["loginPw"];

    $con = mysqli_connect("localhost", "root", "", "web_programing");
   $sql = "select * from members where loginId='$loginId'";
   $result = mysqli_query($con, $sql);

   $num_match = mysqli_num_rows($result);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_loginPw = $row["loginPw"];

        mysqli_close($con);

        if($loginPw != $db_loginPw)
        {

           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userId"] = $row["loginId"];
            $_SESSION["userName"] = $row["name"];

            echo("
              <script>
                alert('환영합니다.');
                location.href = 'home.php';
              </script>
            ");
        }
     }        
?>