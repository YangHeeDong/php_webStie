<?php
	include "head.php";
?>
<?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];
    $Q8 = $_POST["Q8"];
    $Q9 = $_POST["Q8"];

    $sum = $Q1+$Q2+$Q3+$Q4+$Q5+$Q6+$Q7+$Q8+$Q9;

    if($sum>60){
        $result = "a";
    }
    if($sum<=60&&$sum>50){
        $result = "b";
    }
    if($sum<=50&&$sum>40){
        $result = "c";
    }
    if($sum<=40&&$sum>30){
        $result = "d";
    }
    if($sum<=30&&$sum>20){
        $result = "e";
    }
    if($sum<=20){
        $result = "f";
    }

?>

<style>
.img{
    position: relative;                                                               
    height: 100%;
    background-size: cover;
  }

.img-cover {
	position: absolute;
	height: 100%;
	width: 100%;
	background-color: rgba(0, 0, 0, 0.7);                                                                 
	z-index:1;
}

.img .content {
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%, -50%);                                                                   
	font-size:3rem;
	color: white;
	z-index: 2;
	text-align: center;
}
</style>
<?php

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from simOneResult where typeCode='$result'";
	$result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
	$body = $row["body"];

	$body = str_replace(" ", "&nbsp;", $body);
	$body = str_replace("\n", "<br>", $body);

?>
<div class="section section-simTest">
	<div class="container mx-auto mb-4">
			<div class="img">
				<div class="content">
                    <?=$body?>
                    <?php if($userId != null) {?>
                        <form method="post" action="article_write_form.php?boardId=1">
                            <input type="hidden" name="simResult" value="<?=$body?>">
                            <button type="submit"class="btn btn-primary btn-lg mb-1">
                                <span><i class="far fa-paper-plane"></i></span>
                                &nbsp;
                                <span>자유게시판에 공유하기</span>
                            </button>
                        </form>
                    <?php }?>
				</div>
				<div class="img-cover"></div>
				<img src="심1_result.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>