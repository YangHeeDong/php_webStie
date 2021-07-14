<?php
	include "head.php";
?>

<script>

function MemberLogin__submitForm(form){
	
	form.loginId.value = form.loginId.value.trim();
	
	if(form.loginId.value.length == 0){
		alert('아이디를 입력해 주세요');
		form.loginId.focus();
		
		return ;
	}
	
	form.loginPw.value = form.loginPw.value.trim();
	
	if(form.loginPw.value.length == 0){
		alert('비밀번호를 입력해 주세요');
		form.loginPw.focus();
		
		return ;
	}

	form.submit();

}


</script>

<div class="section section-member-login">
	<div class="container mx-auto">
		<div class="join-form-box">
		
			<form action="member_doLogin.php" method="POST" onsubmit="MemberLogin__submitForm(this); return false;" >
				<div class="form-control">
					<label class="label">
						<span>ID</span>
					</label>
					<input class="input input-bordered" maxlength="30" type="text" name="loginId" placeholder="아이디를 입력하세요"/>
				</div>
				
				<div class="form-control">
					<label class="label">
						<span>PW</span>
					</label>
					<input class="input input-bordered" maxlength="30" type="password" name="loginPw" placeholder="비밀번호를 입력하세요"/>
				</div>
				
				<button class="btn btn-sm btn-primary mt-2" type="submit">
					<span><i class="fas fa-sign-in-alt"></i></span>&nbsp
					<span>로그인</span>
				</button>
				<a href="member_join.php" class="btn btn-sm mb-1">
					<i class="fas fa-user-plus"></i>
                    &nbsp;
                    <span>회원가입</span>
                </a>
				<a href="home.php" class="btn btn-sm mb-1">
                    <span><i class="fas fa-home"></i></span>
                    &nbsp;
                    <span>홈</span>
                </a>
			</form>
			
		</div>
	</div>
</div>

<?php
	include "foot.php";
?>