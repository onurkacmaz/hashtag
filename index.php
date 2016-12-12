<?php

/**
 * User: Onur
 * Date: 11.12.2016
 * Time: 15:05
 */

	function hashtag($gelen) {

		$desen = "@#+([a-zA-Z0-9-IıĞğÜüŞşİiÖöÇç]+)@si";
		$gelen = preg_replace($desen, '<a href="hashtag?tag=$1">$0</a>', $gelen);

		return 	$gelen;

	}

?>
