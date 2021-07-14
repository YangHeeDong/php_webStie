<?php
	include "head.php";
?>

<?php
    if(isset($_POST['simResult']))
    {
        $simResult=$_POST['simResult'];
        $simResultTitle=$userName.'님의 심리테스트 결과에요!';

        $simResult = str_replace("&nbsp;"," " , $simResult);
        $simResult = str_replace("<br>","\n" , $simResult);
    }
    else
    {
        $simResult=null;
        $simResultTitle=null;
    }
    

    $boardId = $_GET["boardId"];
    if($boardId == "0")
        $printMode = "공지사항 글쓰기";
    else
        $printMode = "자유게시판 글쓰기";
?>

<script>
let articleWrite__submitFormDone = false;
function articleWrite__submitForm(form) {
    if ( articleWrite__submitFormDone ) {
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
            <span class="badge badge-accent mt-10 mb-5 text-lg"><?=$printMode?></span>
            <br>
        </div>
	    <form method="POST" action="article_insert.php" onsubmit="articleWrite__submitForm(this); return false;">
            <input type="hidden" name="mid" value='<?=$userId?>'>
            <input type="hidden" name="name" value='<?=$userName?>'>
            <input type="hidden" name="boardId" value='<?=$boardId?>'>
	        <div class="form-control">
                <label class="label">
                    제목
                </label>
                <input class="input input-bordered w-full" type="text" maxlength="100" name="title" value="<?=$simResultTitle?>" placeholder="제목을 입력해주세요." />
            </div>

            <div class="form-control">
                <label class="label">
                    내용
                </label>
                <textarea class="textarea textarea-bordered w-full h-24" placeholder="내용을 입력해주세요." name="body" maxlength="2000"><?=$simResult?></textarea>
            </div>

            <div class="mt-4 btn-wrap gap-1">
                <button type="submit"class="btn btn-primary btn-sm mb-1">
                    <span><i class="far fa-paper-plane"></i></span>
                    &nbsp;
                    <span>작성</span>
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