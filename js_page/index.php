<?php
	/**
	 * JS Page support
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2012
	 * @link http://www.marcus-povey.co.uk
	 */

	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

	global $CONFIG;
	
	// Set some caching headers (mime should have already been set by the page handler)
	header('Content-type: text/javascript');
	header('Expires: ' . date('r',time() + 86400000), true);
	header("Pragma: public", true);
	header("Cache-Control: public", true);
	
	echo view('js');
?>