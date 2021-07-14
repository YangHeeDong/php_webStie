<?php
	include "head.php";
?>

<script>

function MemberJoin__submitForm(form){
	
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
	
	form.loginPwConfirm.value = form.loginPwConfirm.value.trim();
	
	if(form.loginPwConfirm.value.length == 0){
		alert('비밀번호 확인을 입력해 주세요');
		form.loginPwConfirm.focus();
		
		return ;
	}
	
	if(form.loginPw.value != form.loginPwConfirm.value){
		alert('비밀번호가 일치하지 않습니다.');
		form.loginPwConfirm.focus();
		
		return ;
	}
	
	form.name.value = form.name.value.trim();
	
	if(form.name.value.length == 0){
		alert('이름을 입력해 주세요');
		form.name.focus();
		
		return ;
	}
	
	form.email.value = form.email.value.trim();
	
	if(form.email.value.length == 0){
		alert('이메일을 입력해 주세요');
		form.email.focus();
		
		return ;
	}
	
	form.submit();
	
}

function check_id() {
     window.open("member_check_loginId.php?loginId=" + document.member_form.loginId.value, "IDcheck", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}

</script>

<div class="section section-member-join px-2">
	<div class="container mx-auto">
		<div class="wrtie-form-box">
			<form name="member_form" action="member_doJoin.php" method="POST" onsubmit="MemberJoin__submitForm(this); return false;">

				<div class="form-control">
					<label class="label">
						<span>아이디</span>	
					</label>
					<input class="input input-bordered" name="loginId" type="text" maxlength="30" placeholder="아이디를 입력하세요" />
					<a herf="#" class="btn btn-sm mb-1 mt-2" onclick="check_id();">중복 확인</a>
				</div>
				
				<div class="form-control">
					<label class="label">
						<span>비밀번호</span>
					</label>
					<input class="input input-bordered" name="loginPw" type="password" maxlength="30" placeholder="비밀번호를 입력하세요" />
				</div>
				
				<div class="form-control">
					<label class="label">
						<span>비밀번호 확인</span>	
					</label>
					<input class="input input-bordered" name="loginPwConfirm" type="password" maxlength="30" placeholder="비밀번호 확인을 입력하세요" />
				</div>
				
				<div class="form-control">
					<label class="label">
						<span>이름</span>	
					</label>
					<input class="input input-bordered" name="name" type="text" maxlength="30" placeholder="이름을 입력하세요" />
				</div>
				
				<div class="form-control">
					<label class="label">
						<span>E-MAIL</span>	
					</label>
					<input class="input input-bordered" name="email" type="email" maxlength="50" placeholder="이메일을 입력하세요" />
				</div>
				
				<button class="btn btn-sm btn-primary mt-2" type="submit" ><i class="fas fa-user-plus"></i>&nbsp 가입</button>
				
				<a href="home.php" class="btn btn-sm mb-1" ><i class="fas fa-home"></i>&nbsp홈</a>
			</form>
		</div>
	</div>
</div>

<?php
	include "foot.php";
?>