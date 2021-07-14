<?php
	include "head.php";
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
	font-size:4rem;
	color: white;
	z-index: 2;
	text-align: center;
}
</style>
<div class="section section-simTest">
	<div class="container mx-auto mb-4">
			<div class="img">
				<div class="content">
					<h2>나에게 맞는 동아리를<br>찾아봐요!</h2>
                    <a href="simTest2-2.php" role="button" aria-pressed="true" class="btn btn-accent btn-active text-2xl">시작하기</a> 
				</div>
				<div class="img-cover"></div>
				<img src="학교.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>