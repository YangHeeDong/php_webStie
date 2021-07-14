<?php
	include "head.php";
?>
<?php
	$mode = $_GET["mode"];
	$num  = $_GET["num"];

	$con = mysqli_connect("localhost", "root", "", "web_programing");
	$sql = "select * from message where id=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id    = $row["sendId"];
	$rv_id      = $row["rvId"];
	$regist_day = $row["regDate"];
	$subject    = $row["title"];
	$content    = $row["body"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	if ($mode=="send")
		$result2 = mysqli_query($con, "select name from members where loginId='$rv_id'");
	else
		$result2 = mysqli_query($con, "select name from members where loginId='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["name"];

	if ($mode=="send")
	    $printMode = "송신 쪽지함 > 내용보기";
	else
        $printMode = "수신 쪽지함 > 내용보기";
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
                                <span class="badge">제목</span>
                                <span><?=$subject?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">보낸이</span>
                                <span><?=$msg_name?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">내용</span>
                                <span><?=$content?></span>
                            </div>
                            <br>
                            <div>
                                <span class="badge">날짜</span>
                                <span><?=$regist_day?></span>
                            </div>
                            <br>
                        </div>
                </div>

                <div class="px-10 mb-4 btn-wrap gap-1">
                    <?php if ($mode!="send") { ?>
                        <a href="member_message_response_form.php?num=<?=$num?>" class="btn btn-primary btn-sm mb-1">
                            <span><i class="far fa-paper-plane"></i></span>
                            &nbsp;
                            <span>답변쪽지</span>
                        </a>
                    <?php } ?>
                        <a href="member_message_delete.php?num=<?=$num?>&mode=<?=$mode?>" class="btn btn-sm mb-1">
                            <i class="fas fa-trash-alt"></i>
                            &nbsp;
                            <span>삭제</span>
                        </a>
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
            </div>
		</div>
	</div>
</div>
<?php
	include "foot.php";
?>