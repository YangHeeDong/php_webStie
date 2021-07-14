<?php

    $num   = $_GET["replyId"];
    $page   = $_GET["page"];
    $parentId = $_GET["parentId"];

    $con = mysqli_connect("localhost", "root", "", "web_programing");

    $sql = "delete from reply where id = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'article_view.php?page=$page&id=$parentId';
	     </script>
	   ";
?>