<?php

	if (!defined("iINDEX")) {

		header("HTTP/1.1 403 Forbidden");
		die('Access denied');

	} else {

        /*echo '<pre>';
		print_r($tmp_path);
        echo '</pre>';*/

        if ($tmp_path !='404found') {
			$error404 = false;
        	if (is_string($tmp_path)) {
        		if($tmp_path == 'home') {
        			$controller = 'home';
        		}
	        	echo '$controller = ' . $controller;
        		$controller = $tmp_path[0];
        		$alias = $tmp_path[1];

        		echo '$controller = ' . $controller . '<br />';
        		echo '$alias = ' . $alias . '<br />';

        	if (($controller != 'home') && ($controller != 'search') && ($controller != 'cart')) {

        		if ($controller == 'category') {

					$table = 'category';

        		} else if ($controller == 'pages') {

					$table = 'pages';

        		} else if ($controller == 'shop') {

					$table = 'items';

        		} else {

        		if ($error404 == false) {

	        		$field = 'alias';
	        		$value = $alias;

					$sql = 'SELECT `alias` FROM `'.$table.'` WHERE `'.$field.'` = "'.$value.'"';
                    //echo $sql;
					$data = $mysqli->query($sql);

			        /*echo '<pre>';
					print_r($data);
			        echo '</pre>';

                    print $data->num_rows;*/

					if ($data->num_rows == 0) {
						$error404 = true;

        		echo $error404;

       		if ($error404 == true) {
				$serverresponse = '404';
				header('HTTP/1.1 404 Not Found');
				include_once($_SERVER['DOCUMENT_ROOT']."sections/head.php");
				include_once($_SERVER['DOCUMENT_ROOT'].'sections/headers.php');
				include_once($_SERVER['DOCUMENT_ROOT'].'pages/404.php');
				include_once($_SERVER['DOCUMENT_ROOT'].'sections/footer.php');
			}

	}

?>