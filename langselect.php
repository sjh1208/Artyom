<?php
	$menu = "<a href='/kr'><img src='flags/korea.png' alt='한국어'></img></a>
<a href='en'><img src='flags/usa.png' alt='American English'></img></a>
<a href='ru'><img src='flags/russia.png' alt='Русский Язык'></img></a>
<a href='de'><img src='flags/germany.png' alt='Deutsch'></img></a>
<a href='cn'><img src='flags/taiwan.png' alt='標準中國語'></img></a>
<a href='jp'><img src='flags/japan.png' alt='日本語'></img></a>
<a href='fr'><img src='flags/france.png' alt='français'</img></a>";

	$domain = $_SERVER['HTTP_HOST'];
	$local = null;
	if($domain != "vxz.me")
	{
		$domain = "service.iryuweb.com";
		$local = $_SERVER['HTTP_HOST'];
	}
?>
