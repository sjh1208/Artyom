<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("script.php");
?>
<html>
	<head>
		<title>Ouch!</title>
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
				<b><h1>I'm working on it!</h1></b>
			</header>
			<section>
				<p>I'm developing brand new homepage for this.</p>
				<p>Please use links below until job done. :)</p>
								<nav>
					<a href="https://blog.abray.us">Blog</a>  |   
					<a href="https://github.com/andrewcell">Source on Github</a>
				</nav>
			</section>
			<footer>		
				<p>Contact : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>				
			</footer>
		</div>
	</body>
</html>

