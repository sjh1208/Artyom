<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("langselect.php");
?>
<html>
	<head>
		<title>おやっ！</title>
	</head>
	<body>
		<style>
			@import url(https://fonts.googleapis.com/earlyaccess/notosansjapanese.css);			
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
				font-family: 'Noto Sans Japanese', sans-serif;
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
				<b><h1>私はそれに取り組んでいます！</h1></b>
			</header>
			<section>
				<p>私はこのためのブランドの新しいホームページを開発しています。</p>
				<p>仕事をするまで、以下のリンクを使用してください。(*'▽'*)♪</p>
				<li><p>私たちは韓国語でブログを提供しています。我々はサポート日本語のための任意の計画を持っていません。</p></li>
				<nav>
					<a href="https://blog.vxz.me">ブログ</a>  |   
					<a href="http://blog2.vxz.me">ティストリ</a>  |  
					<a href="https://github.com/andrewcell">Githubの上のソース</a>
				</nav>
			</section>
			<footer>		
				<p>考えます : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>
			</footer>
		</div>
	</body>
</html>

