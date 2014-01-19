<?php

	$string = $_SERVER['REQUEST_URI'];
	$string = explode("=", $string,2);
	$string = $string[1];
	echo $string;
	
?>