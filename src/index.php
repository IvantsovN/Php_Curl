<?php
	
	$ch = curl_init('https://yandex.ru/pogoda/saint-petersburg');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false); // Получаем заголовки
	//curl_setopt($ch, CURLOPT_NOBODY, true); // Получаем только заголовки
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// Отключаем проверки, позволяющие 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//загружать странички без https
	$html = curl_exec($ch);
	curl_close($ch);

	echo $html;