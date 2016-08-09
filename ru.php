<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("script.php");
?>
<html>
	<head>
		<title>Ой!</title>
	</head>
	<body>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Noto+Sans&subset=cyrillic');
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
				font-family: 'Noto Sans', sans-serif;
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
				<b><h1>Я работаю над этим!</h1></b>
			</header>
			<section>
				<p>Я занимаюсь разработкой совершенно новую домашнюю страницу для этого.</p>
				<p>Пожалуйста, нам ссылки ниже, пока задание не сделано. )</p>
				<li><p>Мы предлагаем блог только на корейском языке. Тем не менее, у нас нет никакого плана для поддержки русского языка.</p></li>
				<nav>
					<a href="https://blog.vxz.me">Блог</a>  |   
					<a href="http://blog2.vxz.me">Tistory</a>  |  
					<a href="https://github.com/andrewcell">Источник на Github</a>
				</nav>
			</section>
			<footer>		
				<p>Почта для связи : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>
			</footer>
		</div>
	</body>
</html>

