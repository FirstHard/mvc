<?php

	if (!defined("iINDEX")) {

		header("HTTP/1.1 403 Forbidden");
		die('Access denied');

	} else {
		$data = $conn->get_data();
        //echo $data;
	}

?>