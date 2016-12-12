<?php

/**
 * User: Onur
 * Date: 11.12.2016
 * Time: 15:05
 */

function otomatik_url($veri) {

	    $veri = ereg_replace("[[:alpha:]]+://[^<>[:space:]]+[[:alnum:]/]", "<a href=\"\\0\" target=\"_blank\">\\0</a>", $veri);
	    return $veri;

}

?>
