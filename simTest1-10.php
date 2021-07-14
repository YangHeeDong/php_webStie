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
					<h2>잠이 들기전까지 하는 자세는<br> 무엇인가요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-result.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">
                        <input type="hidden" name="Q3" value="<?=$Q3?>">
                        <input type="hidden" name="Q4" value="<?=$Q4?>">
                        <input type="hidden" name="Q5" value="<?=$Q5?>">
                        <input type="hidden" name="Q6" value="<?=$Q6?>">
                        <input type="hidden" name="Q7" value="<?=$Q7?>">
                        <input type="hidden" name="Q8" value="<?=$Q8?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">똑바로 누워 있는다</span> 
                                <div>
                                    <input type="radio" name="Q9" checked="checked" class="radio radio-primary" value="7"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">엎드려 있는다</span> 
                                <div>
                                    <input type="radio" name="Q9" class="radio radio-primary" value="6"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">옆으로 누워 약간 구부려 있는다</span> 
                                <div>
                                    <input type="radio" name="Q9" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">팔배게를 하고 있는다</span> 
                                <div>
                                    <input type="radio" name="Q9" class="radio radio-primary" value="2"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">이불을 머리 위까지 덮고 잔다</span> 
                                <div>
                                    <input type="radio" name="Q9" class="radio radio-primary" value="1"> 
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
				<img src="심1_9.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>