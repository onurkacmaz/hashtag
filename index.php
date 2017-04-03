<?php

/**
 * User: Onur
 * Date: 11.12.2016
 * Time: 15:05
 */

	function hashtag($param) {

		$pattern = "@#+([a-zA-Z0-9-IıĞğÜüŞşİiÖöÇç]+)@si";
		$param = preg_replace($pattern, '<a href="hashtag?tag=$1">$0</a>', $param);

		return 	$param;

	}

?>
