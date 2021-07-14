<?php
  session_start();
  unset($_SESSION["userId"]);
  unset($_SESSION["userNcikname"]);
  
  echo("
       <script>
            alert('로그아웃 되었습니다.');
          location.href = 'home.php';
         </script>
       ");
?>