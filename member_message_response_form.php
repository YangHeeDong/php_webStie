<?php
	include "head.php";
?>

<script>
let MessageSend__submitFormDone = false;
function MessageSend__submitForm(form) {
    if ( MessageSend__submitFormDone ) {
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

<?php
	$num  = $_GET["num"];

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from message where id=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id      = $row["sendId"];
	$rv_id      = $row["rvId"];
	$subject    = $row["title"];
	$content    = $row["body"];

	$subject = "RE: ".$subject; 

	$content = "> ".$content; 
	$content = str_replace("\n", "\n>", $content);
	$content = "\n\n\n-----------------------------------------------\n".$content;

	$result2 = mysqli_query($con, "select name from members where loginId='$send_id'");
	$record = mysqli_fetch_array($result2);
	$send_name    = $record["name"];
?>

<div class="section section-article-list">
	<div class="container mx-auto">
        <div>
            <span class="badge badge-accent mt-10 mb-5 text-lg">쪽지쓰기</span>
            <br>
        </div>
	    <form method="POST" action="member_message_send.php" onsubmit="MessageSend__submitForm(this); return false;">

            <input type="hidden" name="sendId" value='<?=$rv_id?>'>
            <input type="hidden" name="rvId" value='<?=$send_id?>'>

            <div class="form-control">
                <label class="label">
                    보내는 사람<br>
                    <?=$rv_id?>
                </label>
            </div>

            <div class="form-control">
                <label class="label">
                    수신자 아이디<br>
                    <?=$send_id?>
                </label>
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