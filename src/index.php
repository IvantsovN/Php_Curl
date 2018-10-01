<?php
	
	$ch = curl_init('https://yandex.ru/pogoda/saint-petersburg');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($ch);
	curl_close($ch);

	echo $html;