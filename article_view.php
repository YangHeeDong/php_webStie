<?php
	include "head.php";
?>
<?php
    $page = $_GET["page"];
	$num  = $_GET["id"];

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from article where id=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$boardId = $row["boardId"];
	$mid      = $row["mid"];
	$name = $row["name"];
	$title    = $row["title"];
	$body    = $row["body"];
    $regDate    = $row["regDate"];
    $updateDate    = $row["updateDate"];

	$body = str_replace(" ", "&nbsp;", $body);
	$body = str_replace("\n", "<br>", $body);

	if ($boardId=="0")
	    $printMode = "공지사항 > 내용보기";
	else
        $printMode = "자유게시판 > 내용보기";
?>
</section>
<div class="section section-message-list mt-8 mb-10">
	<div class="container mx-auto">
		<div class="messages">
			<div class="card bordered shadow-lg">
                <div class="card-title">
                    <a href="javascript:history.back();" class="cursor-pointer">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <span><?=$printMode?></span>
                </div>
                <div class="px-10 py-8">
                        <div>
                            <div>
                                <span class="badge">작성자</span>
                                <span><?=$name?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">제목</span>
                                <span><?=$title?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">내용</span>
                                <div class="ml-14"><?=$body?></div>
                            </div>
                            <br>
                            <div>
                                <span class="badge">작성 날짜</span>
                                <span><?=$regDate?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">수정 날짜</span>
                                <span><?=$updateDate?></span>
                            </div>
                            <br>
                        </div>
                </div>

                <div class="px-10 mb-4 btn-wrap gap-1">
                    <?php if ($name==$userName&&$mid==$userId) { ?>
                        <a href="article_modify.php?page=<?=$page?>&num=<?=$num?>" class="btn btn-primary btn-sm mb-1">
                            <span><i class="fas fa-edit"></i></span>
                            &nbsp;
                            <span>수정하기</span>
                        </a>
                        <a href="article_delete.php?page=<?=$page?>&num=<?=$num?>&boardId=<?=$boardId?>" class="btn btn-sm mb-1">
                            <i class="fas fa-trash-alt"></i>
                            &nbsp;
                            <span>삭제</span>
                        </a>
                    <?php } ?>
                        <a href="article_list.php?boardId=<?=$boardId?>&page=<?=$page?>" class="btn btn-sm mb-1">
                            <span><i class="fas fa-list"></i></span>
                            &nbsp;
                            <span>목록으로</span>
                        </a>
                </div>

                <?php if($userName!=null){?>
                <!-- 댓글 입력 시작 -->
                <div class="px-4 py-8">
                    <script>
                    let ReplyWrite__submitFormDone = false;
                    function ReplyWrite__submitForm(form) {
                        if ( ReplyWrite__submitFormDone ) {
                            return;
                        }
                        form.body.value = form.body.value.trim();
                        if ( form.body.value.length == 0 ) {
                            alert('내용을 입력해주세요.');
                            form.body.focus();
                            return;
                        }
                        form.submit();
                        ReplyWrite__submitFormDone = true;
                    }
                    </script>
                    <form method="POST" action="reply_insert.php" class="relative flex py-4 text-gray-600 focus-within:text-gray-400" onsubmit="ReplyWrite__submitForm(this); return false;">
                        <input type="hidden" name="page" value="<?=$page?>">
                        <input type="hidden" name="id" value="<?=$num?>">
                        <input name="body" type="text" class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="댓글을 입력해주세요." autocomplete="off">

                        <span class="absolute inset-y-0 right-0 flex items-center pr-6">
                            <button type="submit" class="p-1 focus:outline-none focus:shadow-none hover:text-blue-500">
                                <i class="fas fa-pen"></i>
                            </button>
                        </span>
                    </form>
                    <!-- 댓글 입력 끝 -->
                </div>
                <?php }?>

                <?php
                    $con = mysqli_connect("localhost", "root", "", "web_programing");

                    $sql = "select * from reply where parentId=$num order by id desc";

                    $result = mysqli_query($con, $sql);
                    $total_record = mysqli_num_rows($result); // 전체 글 수

                    $scale = 10;

                    // 전체 페이지 수($total_page) 계산 
                    if ($total_record % $scale == 0)     
                        $total_page = floor($total_record/$scale);      
                    else
                        $total_page = floor($total_record/$scale) + 1; 
                
                    // 표시할 페이지($page)에 따라 $start 계산  
                    $start = ($page - 1) * $scale;      

                    $number = $total_record - $start;

                for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
                {
                    mysqli_data_seek($result, $i);
                    // 가져올 레코드로 위치(포인터) 이동
                    $row = mysqli_fetch_array($result);
                    // 하나의 레코드 가져오기
                    $replyId = $row["id"];
                    $body = $row["body"];
                    $parentId = $row["parentId"];
                    $regist_day = $row["regDate"];
                    $reply_mid = $row["mid"];
                    $reply_name = $row["name"];
                ?>
                <div class="item-bt-1-not-last-child">
                    <!-- 메세지 아이템, first -->
                    <div class="px-4 py-1">
                        <div class="input input-bordered border-gray-400 w-full">
                                <div>
                                    <span class="badge badge-primary mt-3"><?=$reply_name?></span>
                                    <span>: <?=$body?> </span>
                                    <?php if($userId==$reply_mid) {?>
                                        <a href="reply_delete.php?page=<?=$page?>&replyId=<?=$replyId?>&parentId=<?=$parentId?>" class="btn btn-sm mt-2 float-right">
                                            <i class="fas fa-trash-alt"></i>
                                            &nbsp;
                                            <span>삭제</span>
                                        </a>
                                    <?php }?>
                                </div>
                        </div>
                    </div>
                </div>

                <?php
                    $number--;
                }
                mysqli_close($con);
                ?>
                <div class="mb-5"></div>
            </div>
		</div>
	</div>
</div>
<?php
	include "foot.php";
?>