<?php
    $num = $_POST["num"];
    $page = $_POST["page"];


    $title = $_POST["title"];
    $body = $_POST["body"];
    $updateDate = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "root", "", "web_programing");
    $sql = "update article set title='$title', body='$body', updateDate='$updateDate' ";
    $sql .= " where id=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'article_view.php?page=$page&id=$num';
	      </script>
	  ";
?>
