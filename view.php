<?php
	session_start();
	$file=fopen("num_of_people.txt","r");
	$num=fgets($file);
	fclose($file);
	if($_SESSION['come']!='v'){
		 $num++;
		 $file=fopen("num_of_people.txt","w");
		 fwrite($file,$num);
		 fclose($file);
		 $_SESSION['come']='v';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FCU_WP_DEMO</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId            : '350529272037640',
		  autoLogAppEvents : true,
		  xfbml            : true,
		  version          : 'v2.11'
		});
	  };
	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
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
							<a href="https://www.facebook.com/%E5%81%8F%E9%84%89%E5%85%92%E7%AB%A5%E7%99%BC%E5%B1%95%E6%8F%B4%E5%8A%A9%E8%AB%96%E5%A3%87-151420602306749/" target=_blank>粉絲頁</a> <span class="divider"></span>
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
			<div class="row">
			<marquee behavior=SCROLL direction=left SCROLLAMOUNT=6>感謝！藍海集團 國董 大力贊助５０００萬元補助偏鄉兒童營養午餐！！ 感謝！ 洪打顛 王董事長 提供６所偏鄉學校平板教室各６０台平板電腦！</marquee>
				<div class="col-md-9">
					<div class="carousel slide" id="carousel-858790">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-858790">
							</li>
							<li data-slide-to="1" data-target="#carousel-858790">
							</li>
							<li data-slide-to="2" data-target="#carousel-858790">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="Carousel Bootstrap First" src="https://imgur.com/RTx0ZGY.jpg">
								<div class="carousel-caption">
									<h4>
										現代「小阿信」
									</h4>
									<p>
										調查指出 26%偏鄉童常覺肚子餓 9.8%無法天天有晚餐
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Second" src="https://imgur.com/Pdl0vdL.jpg">
								<div class="carousel-caption">
									<h4>
										謝謝聖誕老公公﹗
									</h4>
									<p>
										坤泰文教基金會發起「2011幸福上山-聖誕心願卡認養」活動
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/yB0CvEE.jpg">
								<div class="carousel-caption">
									<h4>
										愛心鞋襪幸福列車
									</h4>
									<p>
										台灣聖心文教基金會與義大利運動品牌DIADORA迪亞多那的兒童節禮物
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/Ic1swek.jpg">
								<div class="carousel-caption">
									<h4>
										關懷偏鄉兒童BMW員工齊動員
									</h4>
									<p>
										BMW總代理汎德公司與兒童福利聯盟攜手合作，為偏鄉兒童帶來更多教育資源及關懷。
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="Carousel Bootstrap Third" src="https://imgur.com/0hajd2l.jpg">
								<div class="carousel-caption">
									<h4>
										孤單、窮忙、偏鄉留守兒的困苦童年
									</h4>
									<p>
										臺灣偏鄉兒童生活樣貌調查報告發表記者會
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-858790" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-858790" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
						<hr>
						<h1>偏鄉弱勢學習貧窮的孩子需要什麼資源？</h1>
						<p>偏鄉弱勢孩子經常面臨家庭破碎或家境貧困的困境，家庭無法給予孩子更多的支持，所以學校是孩子們另外一個溫暖的依靠。很多有愛心的偏鄉師長花很多的時間、心力幫助弱勢孩子，不僅在課業上加強輔導，更負擔起照顧孩子三餐的重任。然而，學校的資源及力量非常有限，孩子們需要更長期的資助，也需要更多團體、企業以及個人的陪伴與支持。</p>
					<div class="row">
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									金援<br> <small>錢不是萬能，但沒有錢萬萬不能!</small>
								</h1>
							</div>
							<p>
								需要募款的人可以點選<strong> <a href="post.php">刊登文章</a> </strong>刊登相關募款資訊，包括募款目的、聯絡資訊、募款金額等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="show.php">文章資訊</a> </strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									人力<br> <small>偏鄉人口外流，人力資源嚴重缺乏!</small>
								</h1>
							</div>
							<p>
								需要招募人力的人可以點選<strong> <a href="post.php">刊登文章 </a></strong>刊登相關招募資訊，包括招募目的、聯絡資訊、薪水等相關資訊。<br>
								想做愛心的人可以點選<strong> <a href="show.php">文章資訊 </a></strong>瀏覽所有需要幫忙的文章。
							</p>
						</div>
						<div class="col-md-4">
							<div class="page-header">
								<h1>
									物資<br> <small>捐助多餘的物資，物盡其用做好事!</small>
								</h1>
							</div>
							<p>
								有多餘物資的人可以點選<strong> <a href="post.php">刊登文章 </a></strong>刊登相關物資資訊，包括物資數量、聯絡資訊等相關資訊。<br>
								有需要物資的人可以點選<strong> <a href="show.php">文章資訊 </a></strong>瀏覽所有捐贈物資的文章。
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<h4>累計瀏覽人數: <?php 
										$string=strlen($num);
										for($i=0;$i<$string;$i++){
											/* $n=substr($num,$i,1);*/
											 echo '<img src=image/num/'.substr($num,$i,1).'.png width=20 height=20 />';
										}
										?>
					</h4>
					<hr>
					<h2>其他愛心網站</h2>
                    <a href="index.php">首頁</a>
				<a href="post.php">發布文章</a>
				<a href="show.php">瀏覽文章</a> 
				<a href="https://www.facebook.com/%E5%81%8F%E9%84%89%E5%85%92%E7%AB%A5%E7%99%BC%E5%B1%95%E6%8F%B4%E5%8A%A9%E8%AB%96%E5%A3%87-151420602306749/" target=_blank>粉絲頁</a> 
				<a href="inf.php">聯絡我們</a> <br>
					<div class="fb-customerchat"
					  page_id="151420602306749"
					  minimized="false">
					</div>
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
				<img src="https://imgur.com/V7bG9Wb.png">
				<h3>Huang © 2017 Just for FCU_Demo</h3><br><br>
			</center>
            <a href="https://lecoin.cc/News" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/WM8vx4w.png" class="img-circle" width="140" height="140"></a><br><br>
					<a href="https://www.104.com.tw/area/volunteer/index.cfm" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Lxxbxq8.png" class="img-circle" width="140" height="140"></a><br><br>
					<a href="http://www.igoods.tw/News/News_Info.aspx?ID=87" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/8nAEaIZ.png" class="img-circle" width="140" height="140"></a><br><br>
					<a href="http://www.npo.org.tw/index.asp" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/DttGZ5E.png" class="img-circle" width="140" height="140"></a><br><br>
					<a href="http://www.17885.com.tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Al3xTZC.png" class="img-circle" width="140" height="140"></a><br><br>
					<a href="https://www.children.org.tw/" target="_blank"><img alt="Bootstrap Image Preview" src="https://imgur.com/Dd7Rrw0.png" class="img-circle" width="140" height="140"></a><br><br>
                    
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