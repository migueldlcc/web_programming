<?php
	// validate.php
	// proxy for W3C 'referer-style' validation
	// Morgan Doocy (morganiq)
	// updated 22 June 2010
	
	$type = $_SERVER['PHP_SELF'] == '/validate-css.php' ? 'css' : 'html';
	$referer = isset($_SERVER['HTTP_REFERER']) ? rawurlencode($_SERVER['HTTP_REFERER']) : '';
	
	function bad_request($message) {
		header('HTTP/1.1 400 Bad Request');
		header('Content-Type: text/plain');
		echo $message;
		exit();
	}
	
	// check for 'referer' header
	if (!$referer) {
		bad_request("Error: No referrer header found.\nPlease link to this script from another page; do not load it directly. (That page must be on a public server like Webster; it cannot be on your local computer.)");
	} else if ($referer == "https://weblogin.washington.edu/") {
		bad_request("Error: Pubcookie interfered with 'referer' header. Please click on your validator link one more time. I'll do it this time, I swear.");
	}
	
	// form validator uri based on type
	if ($type == 'html') {
		$validator_url = 'http://validator.w3.org/check?uri=';
		$uri = $referer;
	} else if ($type == 'css') {
		$validator_url = 'http://jigsaw.w3.org/css-validator/validator?uri=';
		$uri = preg_replace('/^https/', 'http', $referer);
	} else {
		bad_request("Error: Invalid type '$type'.\nPlease specify either 'html' or 'css'.");
	}
	
#	echo "<pre>";
#	print_r($_REQUEST);
#	print "\n\n$type\n$referer\n$validator_url\n$referer\n$uri";
#	echo "</pre>";
	
	// redirect
	header("Location: $validator_url$uri");
?>
