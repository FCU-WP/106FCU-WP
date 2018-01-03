<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FCU_WP_DEMO</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var register_btn_s = 0;
		var post_btn_s = 0;
		var show_btn_s = 0;
		$(document).ready(function(){
			$("#register").hide();
			$("#post").hide();
			$("#show").hide();
			$("#register_btn").click(function(){
				if(register_btn_s == 0){
					$("#register_btn").val("收起");
					register_btn_s = 1;
				}
				else{
					$("#register_btn").val("展開");
					register_btn_s = 0;
				}
				$("#register").toggle(300);
			});
			$("#post_btn").click(function(){
				if(post_btn_s == 0){
					$("#post_btn").val("收起");
					post_btn_s = 1;
				}
				else{
					$("#post_btn").val("展開");
					post_btn_s = 0;
				}
				$("#post").toggle(300);
			});
			$("#show_btn").click(function(){
				if(show_btn_s == 0){
					$("#show_btn").val("收起");
					show_btn_s = 1;
				}
				else{
					$("#show_btn").val("展開");
					show_btn_s = 0;
				}
				$("#show").toggle(300);
			});

		});
	</script>
	<style>
		p{
			font-size: 150%;
		}
	</style>
  </head>
  <body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li>
								<a href="index.php">首頁</a> <span class="divider"></span>
							</li>
							<li>
								<a href="#">粉絲頁</a> <span class="divider"></span>
							</li>
							<li>
								<a href="inf.php">聯絡我們</a> <span class="divider"></span>
							</li>
							<ul class="nav navbar-nav navbar-right">
								<?php
									if($_SESSION['username'] == null)
									{
										echo '哈囉!&nbsp;&nbsp;&nbsp;遊客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php">註冊</a>&nbsp;<a href="login.php">登入</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
									}
									else
									{
										$name = $_SESSION['username'];
										echo '哈囉!&nbsp;&nbsp;&nbsp;'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">登出</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
									}
								?>
							</ul>
						</ul>
						<div class="title">
							<center><img alt="Bootstrap Image Preview" src="https://imgur.com/n1SabPj.png" width="60%"></center>
						</div>
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button> <a class="navbar-brand" href="index.php">新聞</a>
							</div>
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li>
										<a href="post.php">刊登文章</a>
									</li>
									<li>
										<a href="show.php">文章資訊</a>
									</li>
									<li class="dropdown">
										 <a href="#" class="dropdown-toggle" data-toggle="dropdown">常見問題<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li>
												<a href="question.php">帳號申請</a>
											</li>
											<li>
												<a href="question.php">發文流程</a>
											</li>
											<li>
												<a href="question.php">留言流程</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="inf.php">站務資訊</a>
											</li>
										</ul>
									</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="navbar-form navbar-left" role="search" action="javascript:location.href='http://lmgtfy.com/?q='+document.getElementById('search').value">
										<div class="form-group">
											<input type="text" id="search" class="form-control" placeholder="google..">
										</div> 
										<input type ="button" class="btn btn-default" onclick="javascript:location.href='http://lmgtfy.com/?q='+document.getElementById('search').value" value="搜尋"></input>
									</form>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
            <div class="row">
            	<div class="col-md-2">
				</div>
					<div class="col-md-8">
            			<div style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:10px;">
							<h2 class="text-center">聯絡我們<hr></hr></h2>
							<div class="row">
							<div class="col-md-4 col-sm-3 col-xs-12"><img src="https://www.igiving.org.tw/www/images/igiving_55.jpg" class="img-responsive" alt="Responsive image"></div>
							<div class="col-md-8 col-sm-9 col-xs-12 mt">
							<h3 style="color:red">親愛的捐款人 您好：<br></h3>
							<h4>謝謝您對我們的支持，您的愛心將造福更多弱勢團體。<br>
							若您對公益團體提出的各項方案有疑問，如勸募方案的內容說明，捐物方案的報名或是捐款收據寄送相關的問題，請您直接連絡該項受贈的公益團體，在網頁上都有載明其連絡電話及客服電子郵件信箱。
							若您是對我們網頁平台有使用上的問題或建議，歡迎您在工作天週一~週五9:00~18:00與我們聯絡。<br><br></h4>
							
							<h3 style="color:red">偏鄉兒童發展援助論壇<br></h3>
							<h4>客服信箱：d0409891@fcu.edu.tw<br>
							客服專線：0928-404-***<br>
							收到您的來信或來電後，我們將儘快為您服務。謝謝！<br>
							祝 平安順心<br>
							偏鄉兒童發展援助論壇客服部 敬上</h4></div>
							</div>
						</div>
					</div>
               	<div class="col-md-2">
				</div>
			</div>
       <div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style = "font-size: 30px">
			<hr>
			<center>
				<a href="index.php">首頁</a>
				<a href="post.php">發布文章</a>
				<a href="show.php">瀏覽文章</a> 
				<a href="#">粉絲頁</a> 
				<a href="inf.php">聯絡我們</a> <br>
				<img src="https://imgur.com/V7bG9Wb.png">
				<h3>Huang © 2017 Just for FCU_Demo</h3><br><br>
			</center>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
    				