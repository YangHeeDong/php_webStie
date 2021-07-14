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
					<h2>당신은 언제 가장 기분이 좋나요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-3.php">
                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">아침</span> 
                                <div>
                                    <input type="radio" name="Q1" checked="checked" class="radio radio-primary" value="2"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">점심</span> 
                                <div>
                                    <input type="radio" name="Q1" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">저녁</span> 
                                <div>
                                    <input type="radio" name="Q1" class="radio radio-primary" value="6"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <button type="submit"class="btn btn-primary btn-sm mb-1 text-2xl">
                                <span>다음</span>
                                &nbsp;
                                <span><i class="fas fa-arrow-right object-right"></i></span>
                            </button>
                        </div> 
                    </form>
				</div>
				<div class="img-cover"></div>
				<img src="심1_1.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>