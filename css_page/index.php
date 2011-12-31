<?php
	/**
	 * CSS Page support
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
	header('Expires: ' . date('r',time() + 604800), true);
	header("Pragma: public", true);
	header("Cache-Control: public", true);
	header('Content-Type: text/css'); // belts and braces since the mime type detector on my server appears bosted
	
	echo view('css');
?>