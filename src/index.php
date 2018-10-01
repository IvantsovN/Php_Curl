<?php
	
	include "cookie_test.php";

	$cookiefile = "cookie.txt";
	$ch = curl_init('https://zen.yandex.ru/media/wday/samye-strannye-imena-zvezdnyh-detei-5bb2306ae458ca00aca27715?from=feed');

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true); // Получаем заголовки
	curl_setopt($ch, CURLOPT_NOBODY, true); // Получаем только заголовки
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// Отключаем проверки, позволяющие 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//загружать странички без https

	//curl_setopt($ch, CURLOPT_COOKIE, "cural_normal_cookie=1;");
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile); // позволяет сохранять cookie в файл 
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile);
	curl_setopt($ch, CURLOPT_COOKIESESSION, ture); // Все сесиионные куки не передаются, эмитируется новая сессия в браузере	
	$html = curl_exec($ch);
	curl_close($ch);

	echo $html;

	

