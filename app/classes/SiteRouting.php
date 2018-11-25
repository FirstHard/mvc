<?php

	class SiteRouting {

		//public $path;
		//public $tmp_path;
		public $nodes;
		//public $lustupdate;

		function node($nodes) {

			$node = '404found';

			if (($nodes[0] == '') AND (!isset($nodes[1]))) {
			   $node = 'home';

			} else if (($nodes[0] != '') AND (!isset($nodes[1]))) {

			   $node = urldecode($nodes[0]);

			} else if ((isset($nodes[1])) AND (!isset($nodes[2]))) {

			   $node = array();
			   $nodes[0] = urldecode($nodes[0]);
			   $nodes[1] = urldecode($nodes[1]);
			   array_push($node,$nodes[0],$nodes[1]);

			}

			return $node;
		}
	}

?>