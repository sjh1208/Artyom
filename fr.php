<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("langselect.php");
?>
<html>
	<head>
		<title>Aie!</title>
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
				<b><h1>J'y travaille!</h1></b>
			</header>
			<section>
				<p>Je développe la marque nouvelle page d'accueil pour cela.</p>
				<p>S'il vous plaît utiliser les liens ci-dessous jusqu'à ce travail. :)</p>
				<li><p>Nous offrons le blog en langue coréenne. Cependant, nous ne disposons pas de plan de soutien français.</p></li>
				<nav>
					<a href="https://blog.vxz.me">Blog</a>  |   
					<a href="http://blog2.vxz.me">Tistory</a>  |  
					<a href="https://github.com/andrewcell">Source sur Github</a>
				</nav>
			</section>
			<footer>		
				<p>Email du contact : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>
			</footer>
		</div>
	</body>
</html>

