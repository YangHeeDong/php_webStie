<?php
	include "head.php";
?>

<?php
   	$con = mysqli_connect("localhost", "root", "", "web_programing");
    $sql    = "select * from members where loginId='$userId'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $loginId = $row["loginId"];
    $name = $row["name"];
    $email = $row["email"];
    $regDate = $row["regDate"];
    $updateDate = $row["updateDate"];

    mysqli_close($con);
?>

<div class="section section-mypage px-2">
    <div class="container mx-auto">
        <div class="card bordered shadow-lg">
            <!-- 회원 아이템, first -->
            <div class="px-20 py-20">
                <div>
                    <div>
                        <span class="badge badge-accent">아이디&nbsp</span>
                        <span>&nbsp&nbsp&nbsp&nbsp <?php echo "$loginId"?></span>
                    </div>
                    <br>
                    <div>
                        <span class="badge">&nbsp&nbsp이름&nbsp&nbsp</span>
                        <span class="text-gray-600 text-light">&nbsp&nbsp&nbsp&nbsp  <?php echo "$name"?></span>
                    </div>
                    <br>
                    <div>
                        <span class="badge">&nbsp이메일&nbsp</span>
                        <span class="text-gray-600 text-light">&nbsp&nbsp&nbsp&nbsp <?php echo "$email"?></span>
                    </div>
                    <br>
                    <div>
                        <span class="badge">등록날짜</span>
                        <span class="text-gray-600">&nbsp&nbsp&nbsp&nbsp <?php echo "$regDate"?></span>
                    </div>
                    <br>
                    <div>
                        <span class="badge">수정날짜</span>
                        <span class="text-gray-600">&nbsp&nbsp&nbsp&nbsp <?php echo "$updateDate"?></span>
                    </div>

                </div>
                <br>
                <div class="grid grid-item-float gap-3 mt-4">
                    <a href="member_modify.php" class="text-blue-500 hover:underline">
                        <span>
                            <i class="fas fa-edit"></i>
                            <span>수정</span>
                        </span>
                    </a>
                    <a onclick="if ( !confirm('탈퇴하시겠습니까?') ) return false;" href="member_delete.php?loginId=<?=$userId?>" class="text-blue-500 hover:underline">
                        <span>
                            <i class="fas fa-trash"></i>
                            <span>탈퇴</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	include "foot.php";
?>