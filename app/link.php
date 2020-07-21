<?php

	if (!defined("iINDEX")) {

		header("HTTP/1.1 403 Forbidden");
		die('Access denied');

	} else {

        // Авторегистрация классов
	    spl_autoload_register(function ($className){
		    include('app/classes/'.$className.'.php');
		});

		// Проверка соединения с БД
		$mysqli = new SafeMySQL();
	    $mysqli = $conn->dbase();
	    if($mysqli) {

		    if(is_object($mysqli)) {
			    require_once 'queries.php';

		    } else {
		    	echo '<p>Please, call to admin! Error: ' . $mysqli . '</p>';
		    	die;
		    }

	    } else {
		    echo '<p>Error! Please, call to admin!</p>';
		    die;
	    }
	}

?>
