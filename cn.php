<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("script.php");
?>
<html>
	<head>
		<title>天哪!</title>
	</head>
	<body>
		<style>
			@import url(https://fonts.googleapis.com/earlyaccess/notosanstc.css);
			body
			{
				margin: 0;
			}
			.background
			{
				position: fixed;
				background-image: url("pier.jpg");
				height: 100%;
				width: 100%;
				filter: blur(3px);
				-moz-filter: blur(3px);
				-webkit-filter: blur(3px);
				-ms-filter: blur(3px);
				z-index: -1;
			}
			.content 
			{
				position: absolute;
				z-index: 1;
				text-align: center;
				font-family: 'Noto Sans TC', sans-serif;
				color: white;
	 			top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			
			}
			a
			{
				color: red;	
				text-decoration: none;
			}
		</style>
		<div class="background"></div>
		<div class="content">
			<header>
				<b><h1>它正在開發！</h1></b>
			</header>
			<section>
				<p>創建一個全新的網站。</p>
				<p>在此期間，請訪問以下網站。(^^)v</p>
				<li><p>主頁，僅提供韓文，中文沒有一個支持計劃。</p></li>
				<nav>
					<a href="https://blog.vxz.me">博客</a>  |   
					<a href="http://blog2.vxz.me">Tistory</a>  |  
					<a href="https://github.com/andrewcell">來源Github上</a>
				</nav>
			</section>
			<footer>		
				<p>聯繫人電子郵件 : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>
			</footer>
		</div>
	</body>
</html>

