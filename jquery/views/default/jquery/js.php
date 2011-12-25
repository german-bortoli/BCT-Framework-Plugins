<?php
	global $CONFIG;

	if ($CONFIG->debug)
		$lib = 'jquery-1.4.2.js';
	else 
		$lib = 'jquery-1.4.2.min.js';
		
	include_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/jquery/' . $lib);
		