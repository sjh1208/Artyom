<!DOCTYPE html>
<?php
	$domain = $_SERVER['HTTP_HOST'];
	include_once("langselect.php");
?>
<html>
	<head>
		<title>أي صوت للتعبير عن الألم</title>
	</head>
	<body>
		<style>
			@import url(http://fonts.googleapis.com/earlyaccess/notonaskharabicui.css);
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
				font-family: 'Noto Naskh Arabic UI', sans-serif;
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
				<b><h1>!أنا أعمل على ذلك</h1></b>
			</header>
			<section>
				<p>.أنا تطوير العلامة التجارية موقع جديد لهذا</p>
				<p>.يرجى استخدام الروابط أدناه حتى انجاز المهمة</p>
								<nav>
					<a href="https://blog.abray.us">مدونة</a>  |   
					<a href="https://github.com/andrewcell">المصدر على جيثب</a>
				</nav>
			</section>
			<footer>		
				<p>تواصل بالبريد الاكتروني : <a href="mailto:contact@<?=$domain?>" style="color: Black;">contact@<?=$domain?></a></p>
				<?=$menu?>				
			</footer>
		</div>
	</body>
</html>

