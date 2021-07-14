<?php
	include "head.php";
?>
<?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
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
					<h2>당신은 어떤 자세로<br> 앉아서 쉬나요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-6.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">
                        <input type="hidden" name="Q3" value="<?=$Q3?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">무릎을 구부리고 양다리를 꼭 붙힌다</span> 
                                <div>
                                    <input type="radio" name="Q4" checked="checked" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">다리를 꼰다</span> 
                                <div>
                                    <input type="radio" name="Q4" class="radio radio-primary" value="6"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">다리를 쭉 핀다</span> 
                                <div>
                                    <input type="radio" name="Q4" class="radio radio-primary" value="2"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">한 다리를 다른 다리에 말고 있는다</span> 
                                <div>
                                    <input type="radio" name="Q4" class="radio radio-primary" value="1"> 
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
				<img src="심1_4.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>