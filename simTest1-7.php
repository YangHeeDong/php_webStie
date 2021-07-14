<?php
	include "head.php";
?>
<?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
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
					<h2>모임에서 어떻게 등장하나요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-8.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">
                        <input type="hidden" name="Q3" value="<?=$Q3?>">
                        <input type="hidden" name="Q4" value="<?=$Q4?>">
                        <input type="hidden" name="Q5" value="<?=$Q5?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">모든 사람들이 인식하도록 등장한다</span> 
                                <div>
                                    <input type="radio" name="Q6" checked="checked" class="radio radio-primary" value="6"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">조용히 입장해 아는 사람을 찾는다</span> 
                                <div>
                                    <input type="radio" name="Q6" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">눈의 띄지않게 조용히 입장한다</span> 
                                <div>
                                    <input type="radio" name="Q6" class="radio radio-primary" value="3"> 
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
				<img src="심1_6.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>