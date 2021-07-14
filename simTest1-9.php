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
					<h2>당신이 좋아하는 색상은 무엇인가요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-10.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">
                        <input type="hidden" name="Q3" value="<?=$Q3?>">
                        <input type="hidden" name="Q4" value="<?=$Q4?>">
                        <input type="hidden" name="Q5" value="<?=$Q5?>">
                        <input type="hidden" name="Q6" value="<?=$Q6?>">
                        <input type="hidden" name="Q7" value="<?=$Q7?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">빨강, 주황톤</span> 
                                <div>
                                    <input type="radio" name="Q8" checked="checked" class="radio radio-primary" value="6"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">검정</span> 
                                <div>
                                    <input type="radio" name="Q8" class="radio radio-primary" value="7"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">노랑이나 밝은 파랑톤</span> 
                                <div>
                                    <input type="radio" name="Q8" class="radio radio-primary" value="5"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">짙은 파랑이나 자주, 보라색</span> 
                                <div>
                                    <input type="radio" name="Q8" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">흰색</span> 
                                <div>
                                    <input type="radio" name="Q8" class="radio radio-primary" value="3"> 
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
				<img src="심1_8.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>