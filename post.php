<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['username'] == null)
{
	header("location:unlogin_page.php");
}
?>
<?php require('Byet_Host_MySQL.php'); ?>
<?php
$guestName=$_SESSION['username'];
$guestType=$_GET['guestType'];
$guestSubject=$_GET['guestSubject'];
$guestContent=$_GET['guestContent'];
$guestContact=$_GET['guestContact'];
date_default_timezone_set("Asia/Taipei");
$guestTime = date("Y:m:d H:i:s",time());

if(isset($guestSubject)){
mysql_query("set names 'utf8'");
$sql = "insert into b32_21081456_guest.guest(guestID,guestName,guestType,guestSubject,guestTime,guestContent,guestContact)value('','$guestName','$guestType','$guestSubject','$guestTime','$guestContent','$guestContact')";
mysql_query($sql) or die(mysql_error());
header("location:show.php");
}
?>
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

      <style>
          .btn {
              font-family: inherit;
              font-size: .875rem;
              font-weight: 700;
              font-weight: 500;
              cursor: pointer;
              display: inline-block;
              line-height: 1.5rem;
              padding: .5rem 1rem;
              margin: 0;
              height: auto;
              border: 2px solid transparent;
              vertical-align: middle;
              -webkit-appearance: none;
              color: inherit;
              background-color: transparent
          }

            .btn, .btn:hover {
                text-decoration: none
            }

            .btn:focus {
                outline: 0;
                border-color: rgba(0,0,0,.125);
                box-shadow: 0 0 0 3px rgba(0,0,0,.25)
            }

          .btn-outline, .btn-outline:hover {
              border-color: currentcolor
          }

          .btn-outline {
              border-radius: 7px
          }

            .btn-outline:hover {
                box-shadow: inset 0 0 0 20rem rgba(0,0,0,.0625)
            }

            .btn-outline:active {
                box-shadow: inset 0 0 0 20rem rgba(0,0,0,.125),inset 0 3px 4px 0 rgba(0,0,0,.25),0 0 1px rgba(0,0,0,.125)
            }

            .btn-outline.is-disabled, .btn-outline:disabled {
                opacity: .5
            }

          .teal {
              color: #39cccc
          }

          .red {
              color: #ff4136
          }

          .purple {
              color: #b10dc9
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
										echo '哈囉!&nbsp;&nbsp;&nbsp;遊客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">登入</a> <span class="divider"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
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
            			<div style="border-width:3px;border-style:dashed;border-color:#FFFFFF;padding:5px;">
             		  	  <h1 style="text-align:center">刊登文章<hr /></h1>
                            <form id="form1" name="form1" method="get">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"><label for="guestType" style="font-size:20px">分類</label></div>
                                    <div class="col-md-6">
                                        <select name="guestType" id="guestType" class="form-control">
                                            <option value="1" selected="selected">募款</option>
                                            <option value="2">募物</option>
                                            <option value="3">募人</option>
                                        </select>
                                    </div>
                                </div><br />
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"><label for="guestSubject" style="font-size:20px">主旨</label></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="guestSubject" type="text" id="guestSubject" class="form-control" placeholder="主旨" required/>
                                        </div>
                                    </div>
                                </div><br />
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"><label for="guestContent" style="font-size:20px">活動詳情</label></div>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="guestContent" id="guestContent" rows="10" placeholder="寫點什麼吧..." required></textarea>
                                    </div>
                                </div><br />
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2"><label for="guestContact" style="font-size:20px">連絡方式</label></div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="guestContact" type="text" id="guestContact" class="form-control" placeholder="聯絡方式" />
                                        </div>
                                    </div>
                                </div><br />
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-1">
                                        <button type="submit" name="button" id="button" class="btn btn-outline red">送出</button>
                                    </div>
                                </div>
                            </form>
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
    