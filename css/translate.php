<?php
	$apikey = "AIzaSyBBXgScAAlZVVU8w91r8wIue5t8UCLHH2Y";
	$text = "Shut the Fuck up! You motherfucker!";
	$url = "https://www.googleapis.com/language/translate/v2/?key=".$apikey."&q=".rawurlencode($text)."&source=en&target=la";
	$handle = curl_init($url);
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($handle);
	$responseDecoded = json_decode($response, true);
	curl_close($handle);
	 echo 'Translation: ' . $responseDecoded['data']['translations'][0]['translatedText'];
?>
