<?php
	include "head.php";
?>

<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from article where id=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$boardId    = $row["boardId"];
	$mid      = $row["mid"];
	$name = $row["name"];
	$title    = $row["title"];
	$body    = $row["body"];
    $regDate    = $row["regDate"];
    $updateDate    = $row["updateDate"];
?>

<script>
let articleModify__submitFormDone = false;
function articleModify__submitForm(form) {
    if ( articleModify__submitFormDone ) {
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
    articleWrite__submitFormDone = true;
}
</script>

<div class="section section-article-write">
	<div class="container mx-auto">
        <div>
            <span class="badge badge-accent mt-10 mb-5 text-lg">글 수정하기</span>
            <br>
        </div>
	    <form method="POST" action="article_doModify.php" onsubmit="articleWrite__submitForm(this); return false;">
            <input type="hidden" name="num" value='<?=$num?>'>
            <input type="hidden" name="page" value='<?=$page?>'>
            <input type="hidden" name="boardId" value='<?=$boardId?>'>

	        <div class="form-control">
                <label class="label">
                    제목
                </label>
                <input class="input input-bordered w-full" type="text" maxlength="100" name="title" placeholder="제목을 입력해주세요." value="<?=$title?>" />
            </div>

            <div class="form-control">
                <label class="label">
                    내용
                </label>
                <textarea class="textarea textarea-bordered w-full h-24" placeholder="내용을 입력해주세요." name="body" maxlength="2000"><?=$body?></textarea>
            </div>

            <div class="mt-4 btn-wrap gap-1">
                <button type="submit"class="btn btn-primary btn-sm mb-1">
                    <span><i class="far fa-paper-plane"></i></span>
                    &nbsp;
                    <span>수정</span>
                </button>
                <a href="article_list.php?boardId=<?=$boardId?>" class="btn btn-sm mb-1">
                    <span><i class="fas fa-list"></i></span>
                    &nbsp;
                    <span>목록</span>
                </a>
            </div>
	    </form>
	</div>
</div>

<?php
	include "foot.php";
?>