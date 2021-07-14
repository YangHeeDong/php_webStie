<?php
    session_start();
    if (isset($_SESSION["userId"])) $userId = $_SESSION["userId"];
    else $userId = "";
    if (isset($_SESSION["userName"])) $userName = $_SESSION["userName"];
    else $userName = "";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<!-- 모바일에서 사이트가 PC에서의 픽셀크기 기준으로 작동하게 하기(반응형 하려면 필요) -->
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- daisyui 불러오기 -->
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/daisyui@0.14.4/dist/full.css">
	

<!-- 폰트어썸 불러오기 -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<link rel="stylesheet" href="common.css" />
<title>DAONE</title>
</head>
<body>
	<div class="site-wrap">
		<header class="top-bar top-bar--fly">
			<div class="container mx-auto flex h-full">
				<a href="home.php" class="px-3 flex items-center">
					<span>
					<img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar" src="홈로고.png">
					</span>
					<span class="hidden sm:block">&nbsp;DAONE </span>
				</a>

				<div class="flex-grow"></div>

				<nav class="menu-box-1">
					<ul class="flex h-full">
						<li>
							<a href="home.php" class="h-full flex items-center px-5">
								<span>
									<i class="fas fa-home"></i>
								</span>
								<span class="hidden sm:block">&nbsp;HOME</span>
							</a>
						</li>
						<li>
							<a href="#" class="h-full flex items-center px-5">
								<span>
									<i class="far fa-newspaper"></i>
								</span>
								<span class="hidden md:block">&nbsp;BOARD</span>
							</a>
							<div>
								<h1>
									<a href="#">
										<span>
											<i class="far fa-newspaper"></i>
										</span>
										<span>&nbsp;BOARD</span>
									</a>
								</h1>
								<ul>
									<li>
										<a href="article_list.php?boardId=0">
											<span>
												<i class="fas fa-bullhorn"></i>
											</span>
											<span>&nbsp;NOTICE</span>
										</a>
									</li>
									<li>
										<a href="article_list.php?boardId=1">
											<span>
												<i class="far fa-clipboard"></i>
											</span>
											<span>&nbsp;FREE</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<?php if (!$userId) { ?>
                        <li>
                            <a href="member_login.php" class="h-full flex items-center px-5">
                                <span>
                                    <i class="fas fa-sign-in-alt"></i>
                                </span>
                                <span class="hidden md:block">&nbsp;LOGIN</span>
                            </a>
                        </li>
						<?php } else {?>
							<a href="member_mypage.php" class="h-full flex items-center px-5">
                                <span>
								<i class="fas fa-child"></i>
                                </span>
                                <span class="hidden md:block">&nbsp;<?php echo "$userName 's MY PAGE"?></span>
                            </a>
							<a href="member_message.php" class="h-full flex items-center px-5">
                                <span>
								<i class="fas fa-comment-dots"></i>
                                </span>
                                <span class="hidden md:block">&nbsp;message</span>
                            </a>
							<a href="member_logout.php" class="h-full flex items-center px-5">
                                <span>
								<i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span class="hidden md:block">&nbsp;LOGOUT</span>
                            </a>
						<?php }?>

					</ul>
				</nav>
			</div>

		</header>
		<div class="title-bar px-3">
			<div class="mx-auto container">
				
			</div>
		</div>
