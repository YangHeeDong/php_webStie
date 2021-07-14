<?php
	include "head.php";
?>

<style>
.home-box{
	width:50%;
	height:50%;
	float : left;
}
.home{
	border-radius: 5%;
	overflow: hidden;
}
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
<div class="section section-home-list">
	<div class="home container mx-auto cursor-pointer mb-4">
		<a href="article_list.php?boardId=0" class="home-box cursor-pointer">
			<div class="img">
				<div class="content">
					<h2>공지사항</h2>
				</div>
				<div class="img-cover"></div>
				<img src="확성기.png" alt="">
			</div>
		</a>
		<a href="article_list.php?boardId=1" class="home-box cursor-pointer">
			<div class="img">
				<div class="content">
					<h2>자유게시판</h2>
				</div>
				<div class="img-cover"></div>
				<img src="자유게시판.png" alt="">
			</div>
		</a>
		<a href="simTest1-1.php?" class="home-box cursor-pointer">
			<div class="img">
				<div class="content">
					<h2>심리테스트1</h2>
				</div>
				<div class="img-cover"></div>
				<img src="심리테스트1.png" alt="">
			</div>
		</a>
		<a href="simTest2-1.php" class="home-box cursor-pointer">
			<div class="img">
				<div class="content">
					<h2>심리테스트2</h2>
				</div>
				<div class="img-cover"></div>
				<img src="학교.png" alt="">
			</div>
		</a>
		
    </div>
	</div>
</div>
<?php
	include "foot.php";
?>