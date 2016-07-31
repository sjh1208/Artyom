<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
?>
<html>
	<head>
		<title>어이쿠!</title>
	</head>
	<body>
		<style>
			@import url(https://fonts.googleapis.com/earlyaccess/notosanskr.css);
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
				font-family: 'Noto Sans KR', sans-serif;
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
				<h1>개발중입니다!</h1>
			</header>
			<section>
				<p>홈페이지를 완전히 새롭게 만들고있습니다. </p>
				<p>그동안은 아래 사이트를 방문해주세요.</p>
			
				<nav>
					<a href="https://blog.vxz.me">블로그</a>  |   
					<a href="http://blog2.vxz.me">티스토리</a>  |  
					<a href="https://github.com/andrewcell">Source on Github</a>
				</nav>
			</section>
			<footer>		
				<p>연락처 : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<a href="/"><img src="flags/korea.png" alt="한국어"></img></a>
				<a href="en"><img src="flags/usa.png" alt="American English"></img></a>
			</footer>
		</div>
	</body>
</html>

