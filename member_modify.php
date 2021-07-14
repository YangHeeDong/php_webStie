<?php
	include "head.php";
?>
<?php
   	$con = mysqli_connect("localhost", "root", "", "web_programing");
    $sql    = "select * from members where loginId='$userId'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $loginId = $row["loginId"];
    $loginPw = $row["loginPw"];
    $name = $row["name"];
    $email = $row["email"];

    mysqli_close($con);
?>
<script>
let MemberModify__submitFormDone = false;
function MemberModify__submitForm(form) {
	
    if ( MemberModify__submitFormDone ) {
        return;
    }
    
    form.loginPw.value = form.loginPw.value.trim();
    
    if ( form.loginPw.value.length == 0 ) {
        alert('비밀번호를 입력해주세요.');
        form.loginPw.focus();
        return;
    }
    
    form.loginPwConfirm.value = form.loginPwConfirm.value.trim();
    
    if ( form.loginPwConfirm.value.length == 0 ) {
        alert('비밀번호 확인을 입력해주세요.');
        form.loginPwConfirm.focus();
        return;
    }
    
    if(form.loginPw.value != form.loginPwConfirm.value){
        alert("비밀번호가 일치하지 않습니다.");
        form.loginPwConfirm.focus();
        return;
    }

    
    form.name.value = form.name.value.trim();
    
    if ( form.name.value.length == 0 ) {
        alert('이름을 입력해주세요.');
        form.name.focus();
        return;
    }
    
    form.email.value = form.email.value.trim();
    
    if ( form.email.value.length == 0 ) {
        alert('이메일을 입력해주세요.');
        form.email.focus();
        return;
    }
    
    form.submit();
    MemberModify__submitFormDone = true;
}
</script>

<div class="section section-article-list px-2">
	<div class="container mx-auto">
	    <form method="POST" action="member_doModify.php" onsubmit="MemberModify__submitForm(this); return false;" >
            <input value="<?=$loginId?>" type="hidden" name="loginId"/>

	        <div class="form-control">
                <label class="label">
                    아이디
                </label>
                <?=$loginId?>
            </div>

            <div class="form-control">
                <label class="label">
                    비밀번호
                </label>
                <input value="<?=$loginPw?>" class="input input-bordered w-full" type="password" maxlength="30" name="loginPw" placeholder="비밀번호를 입력해주세요." />
            </div>
            
            <div class="form-control">
                <label class="label">
                    비밀번호 확인
                </label>
                <input value="<?=$loginPw?>" class="input input-bordered w-full" type="password" maxlength="30" name="loginPwConfirm" placeholder="비밀번호를 확인을 입력해주세요." />
            </div>
            
            <div class="form-control">
                <label class="label">
                    이름
                </label>
                <input value="<?=$name?>" class="input input-bordered w-full" type="text" maxlength="30" name="name" placeholder="이름을 입력해주세요." />
            </div>
			
			<div class="form-control">
                <label class="label">
                    이메일
                </label>
                <input value="<?=$email?>" class="input input-bordered w-full" type="email" maxlength="30" name="email" placeholder="이메일을 입력해주세요." />
            </div>
            
            <div class="mt-4 btn-wrap gap-1">
                <button type="submit" class="btn btn-primary btn-sm mb-1">
                    <span><i class="fas fa-edit"></i></span>
                    &nbsp;
                    <span>수정</span>
                </button>
                
                <a href="member_mypage.php" class="btn btn-sm mb-1" title="자세히 보기">
                    <span><i class="fas fa-child"></i></span>
                    &nbsp;
                    <span>마이페이지</span>
                </a>

                <a href="home.php" class="btn btn-sm mb-1" title="자세히 보기">
                    <span><i class="fas fa-home"></i></span>
                    &nbsp;
                    <span>홈</span>
                </a>
            </div>
	    </form>
	</div>
</div>

<?php
	include "foot.php";
?>