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
					<h2>당신은 사람들과 얘기할 때 <br>어떤 자세인가요?</h2>
                    <div></div>
                    <form method="post" action="simTest1-5.php">
                        <input type="hidden" name="Q1" value="<?=$Q1?>">
                        <input type="hidden" name="Q2" value="<?=$Q2?>">

                        <div class="form-control">
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">팔짱을 낀다</span> 
                                <div>
                                    <input type="radio" name="Q3" checked="checked" class="radio radio-primary" value="4"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">자신의 손을 꼭쥔다</span> 
                                <div>
                                    <input type="radio" name="Q3" class="radio radio-primary" value="2"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">한손이나 양손을 무엇인가 만진다</span> 
                                <div>
                                    <input type="radio" name="Q3" class="radio radio-primary" value="5"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">상대방을 만진다</span> 
                                <div>
                                    <input type="radio" name="Q3" class="radio radio-primary" value="7"> 
                                    <span class="radio-mark"></span>
                                </div>
                            </label>
                            <label class="cursor-pointer label bordered">
                                <span class="label-text text-white text-3xl">자신의 턱이나 머리카락을 만진다</span> 
                                <div>
                                    <input type="radio" name="Q3" class="radio radio-primary" value="6"> 
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
				<img src="심1_3.png" alt="">
			</div>
    </div>
</div>
<?php
	include "foot.php";
?>