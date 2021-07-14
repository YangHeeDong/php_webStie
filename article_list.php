<?php
	include "head.php";
?>

<?php
    if (isset($_GET["page"]))
    $page = $_GET["page"];
    else
    $page = 1;
    
    $boardId = $_GET["boardId"];
    if($boardId == "0")
        $printMode = "공지사항";
    else
        $printMode = "자유게시판";
?>

<div class="section section-article-list mt-8">
	<div class="container mx-auto">
		<div class="articles">
			<div class="card bordered shadow-lg mb-10">
                <div class="card-title">
                    <a href="javascript:history.back();" class="cursor-pointer">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <span><?=$printMode?> 리스트</span>
                </div>
                <div class="grid gap-3 px-4">
                    <div class="plain-link-wrap gap-3">
                        <a href="article_write_form.php?boardId=<?=$boardId?>" class="btn btn-primary btn-sm mb-1 mt-5">
                            <span><i class="fas fa-pen"></i></span>
                            &nbsp;&nbsp;
                            <span>글쓰기</span>
                        </a>
                    </div>
                </div>
                <?php
                        $con = mysqli_connect("localhost", "root", "", "web_programing");

                        if ($boardId=="0")
                            $sql = "select * from article where boardId=0 order by id desc";
                        else
                            $sql = "select * from article where boardId=1 order by id desc";

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
                        $num = $row["id"];
                        $subject = $row["title"];
                        $regist_day = $row["regDate"];
                        $article_name = $row["name"];
                    ?>
                    <div class="item-bt-1-not-last-child">
                        <!-- 메세지 아이템, first -->
                        <div class="px-4 py-8 ">
                            <div class="input input-bordered border-gray-400 w-full">
                                <a href="article_view.php?&id=<?=$num?>&page=<?=$page?>" class="grid grid-cols-4 gap-3">
                                    <div>
                                        <span class="badge badge-accent mt-3">번호</span>
                                        <span><?=$number?></span>
                                    </div>
                                    <div>
                                        <span class="badge badge-primary mt-3">제목</span>
                                        <span class="onclick"><?=$subject?></span>
                                    </div>
                                    <div>
                                        <span class="badge badge-primary mt-3">작성자</span>
                                        <span><?=$article_name?></span>
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

                    <div class="mb-5 ">
                        <div class="btn-group justify-center">
                        <?php
                            if ($total_page>=2 && $page >= 2)	
                            {
                                $new_page = $page-1;
                                echo "<a href='article_list.php?boardId=$boardId&page=$new_page' class='btn'>◀</a> </li>";
                            }		
                            else 
                                echo "&nbsp;</li>";

                            // 게시판 목록 하단에 페이지 링크 번호 출력
                            for ($i=1; $i<=$total_page; $i++)
                            {
                                if ($page == $i)     // 현재 페이지 번호 링크 안함
                                {
                                    echo "<a class='btn'>$i</a>";
                                }
                                else
                                {
                                    echo "<a href='article_list.php?boardId=$boardId&page=$i' class='btn'> $i </a>";
                                }
                            }
                            if ($total_page>=2 && $page != $total_page)		
                            {
                                $new_page = $page+1;	
                                echo "<a href='article_list.php?boardId=$boardId&page=$new_page' class='btn'> ▶</a> ";
                            }
                            else 
                                echo "<li>&nbsp;</li>";
                        ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

<?php
	include "foot.php";
?>