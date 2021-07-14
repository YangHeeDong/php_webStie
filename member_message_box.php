<?php
	include "head.php";
?>
<?php
    if (isset($_GET["page"]))
    $page = $_GET["page"];
    else
    $page = 1;

    $mode = $_GET["mode"];
    if($mode == "send")
        $printMode = "송신 쪽지함";
    else
        $printMode = "수신 쪽지함";
?>

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
                <?php
                        $con = mysqli_connect("localhost", "root", "", "web_programing");

                        if ($mode=="send")
                            $sql = "select * from message where sendId='$userId' order by id desc";
                        else
                            $sql = "select * from message where rvId='$userId' order by id desc";

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
                        $num    = $row["id"];
                        $subject     = $row["title"];
                        $regist_day  = $row["regDate"];

                        if ($mode=="send")
                            $msg_id = $row["rvId"];
                        else
                            $msg_id = $row["sendId"];
                        
                        $result2 = mysqli_query($con, "select name from members where loginId='$msg_id'");
                        $record = mysqli_fetch_array($result2);
                        $msg_name     = $record["name"];	  
                    ?>
                    <div class="item-bt-1-not-last-child">
                        <!-- 메세지 아이템, first -->
                        <div class="px-4 py-8 ">
                            <div class="input input-bordered border-gray-400 w-full">
                                <a href="member_message_view.php?mode=<?=$mode?>&num=<?=$num?>" class="grid grid-cols-4 gap-3">
                                    <div>
                                        <span class="badge badge-accent mt-3">번호</span>
                                        <span><?=$number?></span>
                                    </div>
                                    <div>
                                        <span class="badge badge-primary mt-3">제목</span>
                                        <span class="onclick"><?=$subject?></span>
                                    </div>
                                    <div>
                                        <span class="badge badge-primary mt-3">송신자</span>
                                        <span><?=$msg_name?></span>
                                    </div>
                                    <div>
                                        <span class="badge mt-3">등록날짜</span>
                                        <span class="text-gray-600 text-light"><?=$regist_day?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                        $number--;
                    }
                    mysqli_close($con);
                    ?>
                                </ul>
                                <ul id="page_num">
                    <div class="text-center mb-5">
                        <?php
                            if ($total_page>=2 && $page >= 2)	
                            {
                                $new_page = $page-1;
                                echo "<a href='member_message_box.php?mode=$mode&page=$new_page'>◀ 이전</a> </li>";
                            }		
                            else 
                                echo "&nbsp;</li>";

                            // 게시판 목록 하단에 페이지 링크 번호 출력
                            for ($i=1; $i<=$total_page; $i++)
                            {
                                if ($page == $i)     // 현재 페이지 번호 링크 안함
                                {
                                    echo "$i";
                                }
                                else
                                {
                                    echo "<a href='member_message_box.php?mode=$mode&page=$i'> $i </a>";
                                }
                            }
                            if ($total_page>=2 && $page != $total_page)		
                            {
                                $new_page = $page+1;	
                                echo "<a href='member_message_box.php?mode=$mode&page=$new_page'>다음 ▶</a> ";
                            }
                            else 
                                echo "<li>&nbsp;</li>";
                        ?>
                    </div>

                    <div class="ml-4 mb-4 btn-wrap gap-1">
                        <a href="member_message.php?" class="btn btn-primary btn-sm mb-1">
                            <span><i class="far fa-paper-plane"></i></span>
                            &nbsp;
                            <span>쪽지쓰기</span>
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