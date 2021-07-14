<?php
	include "head.php";
?>
<?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];

    $result = $Q1.$Q2.$Q3;
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
	$sql = "select * from simTwoResult where typeCode='$result'";
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
                        <form method="post" action="home.php">
                            <input type="hidden" name="simResult" value="<?=$body?>">
                            <button type="submit"class="btn btn-primary btn-lg mb-1">
                                <span><i class="fas fa-home"></i></span>
                                &nbsp;
                                <span>홈으로</span>
                            </button>
                        </form>
                    <?php }?>
				</div>
				<div class="img-cover"></div>
				<img src="심2_result.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>