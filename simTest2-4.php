<?php
	include "head.php";
?>
<?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
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
<div class="section section-simTest">
	<div class="container mx-auto mb-4">
			<div class="img">
				<div class="content">
                    <div></div>
                    <form method="post" action="simTest2-result.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">여러명이 하는 활동이 좋다</span> 
                                <div>
                                    <input type="radio" name="Q3" checked="checked" class="radio radio-primary" value="1"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">혼자하는 활동이 좋다</span> 
                                <div>
                                    <input type="radio" name="Q3" class="radio radio-primary" value="2"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <button type="submit"class="btn btn-primary btn-sm mb-1 text-2xl">
                                <span>결과보기</span>
                                &nbsp;
                                <span><i class="fas fa-arrow-right object-right"></i></span>
                            </button>
                        </div> 
                    </form>
				</div>
				<div class="img-cover"></div>
				<img src="심2_3.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>