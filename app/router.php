<?php

	if (!defined("iINDEX")) {

		header("HTTP/1.1 403 Forbidden");
		die('Access denied');

	} else {
		// ��������� ����������� ���� ������
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);

		// ��� �������
		$path = ltrim($_SERVER['REQUEST_URI'], '/');
		$nodes = explode('/', $path);

		$sm = new SiteRouting();
		$sm->nodes = $nodes;
		$tmp_path = $sm->node($nodes);

	}

?>