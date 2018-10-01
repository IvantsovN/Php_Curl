<?php
	
	setcookie("curl_session_cookies", 1);
	setcookie("cural_normal_cookie", 1, microtime(true) + 10000);

	if (isset($_COOKIE['curl_session_cookies'])) {
		$cookie = true;
		echo "SESSION COOKIE \n\r";
	}

	if (isset($_COOKIE['cural_normal_cookie'])) {
		$cookie = true;
		echo "Normal COOKIE \n\r";
	}

	if($cookie){
		echo "COOKIE TRUE \n\r";
	}
	else{
		echo "COOKIE FALSE\n\r";
	}

