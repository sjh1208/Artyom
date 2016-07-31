<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("langselect.php");
?>
<html>
	<head>
		<title>Autsch!</title>
	</head>
	<body>
		<style>
			@import url('https://fonts.googleapis.com/css?family=Noto+Sans');
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
				<b><h1>Ich arbeite daran!</h1></b>
			</header>
			<section>
				<p>Ich entwickle brandneue Homepage für diese.</p>
				<p>Bitte verwenden Sie Links unten, bis Arbeit geleistet. :)</p>
				<li><p>Wir bieten Blog nur in koreanischer Sprache. Allerdings haben wir keinen Plan Deutsch zu unterstützen</p></li>
				<nav>
					<a href="https://blog.vxz.me">Блог</a>  |   
					<a href="http://blog2.vxz.me">Tistory</a>  |  
					<a href="https://github.com/andrewcell">Quelle auf Github</a>
				</nav>
			</section>
			<footer>		
				<p>Почта для связи : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>
			</footer>
		</div>
	</body>
</html>

