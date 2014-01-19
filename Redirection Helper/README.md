Redirection Helper
==================

<?php

	$string = $_SERVER['REQUEST_URI'];
	$string = explode("=", $string,2);
	$string = $string[1];
	echo $string;
	
?>

For a Redirection Script if Get URL is: http://links.dealsindiadeals.com?url=http://affsite.com?affid=12&affName=DID

If we use GetURL.php we get Get value as: http://affsite.com?affid=12

If we use RequestURL.php we can get complete affiliate site URL i.e. http://affsite.com?affid=12&affName=DID
