<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];
    $boardId = $_GET["boardId"];

    $con = mysqli_connect("localhost", "root", "", "web_programing");

    $sql = "delete from article where id = $num";
    mysqli_query($con, $sql);
    $sql = "delete from reply where parentId = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'article_list.php?page=$page&boardId=$boardId';
	     </script>
	   ";
?>