<?php
	include "head.php";
?>

<script>
let MessageSend__submitFormDone = false;
function MessageSend__submitForm(form) {
    if ( MessageSend__submitFormDone ) {
        return;
    }
    
    form.rvId.value = form.rvId.value.trim();
    if ( form.rvId.value.length == 0 ) {
        alert('수신 아이디를 입력해주세요.');
        form.rvId.focus();
        return;
    }

    form.title.value = form.title.value.trim();
    if ( form.title.value.length == 0 ) {
        alert('제목을 입력해주세요.');
        form.title.focus();
        return;
    }
    form.body.value = form.body.value.trim();
    if ( form.body.value.length == 0 ) {
        alert('내용을 입력해주세요.');
        form.body.focus();
        return;
    }
    form.submit();
    MessageSend__submitFormDone = true;
}
</script>

<div class="section section-message-form">
	<div class="container mx-auto">
        <div>
            <span class="badge badge-accent mt-10 mb-5 text-lg">쪽지쓰기</span>
            <br>
        </div>
	    <form method="POST" action="member_message_send.php" onsubmit="MessageSend__submitForm(this); return false;">
            <input type="hidden" name="sendId" value='<?=$userId?>'>

            <div class="form-control">
                <label class="label">
                    수신자 아이디
                </label>
                <input class="input input-bordered w-full" type="text" maxlength="100" name="rvId" placeholder="수신자 아이디를 입력해주세요." />
            </div>

	        <div class="form-control">
                <label class="label">
                    제목
                </label>
                <input class="input input-bordered w-full" type="text" maxlength="100" name="title" placeholder="제목을 입력해주세요." />
            </div>

            <div class="form-control">
                <label class="label">
                    내용
                </label>
                <textarea class="textarea textarea-bordered w-full h-24" placeholder="내용을 입력해주세요." name="body" maxlength="2000"></textarea>
            </div>

            <div class="mt-4 btn-wrap gap-1">
                <button type="submit"class="btn btn-primary btn-sm mb-1">
                    <span><i class="far fa-paper-plane"></i></span>
                    &nbsp;
                    <span>보내기</span>
                </button>

                <a href="member_message_box.php?mode=rv" class="btn btn-sm mb-1">
                    <span><i class="fas fa-list"></i></span>
                    &nbsp;
                    <span>수신 쪽지함</span>
                </a>
                <a href="member_message_box.php?mode=send" class="btn btn-sm mb-1">
                    <span><i class="fas fa-list"></i></span>
                    &nbsp;
                    <span>송신 쪽지함</span>
                </a>
            </div>
	    </form>
	</div>
</div>

<?php
	include "foot.php";
?>