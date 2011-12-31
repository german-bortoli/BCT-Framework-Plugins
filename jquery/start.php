<?php
	/**
	 * @file
	 * JQuery support.
	 * 
	 * A wrapper around the JQuery library which adds JQuery support to BCT.
	 *
	 * @note Depends on js_page plugin
	 * 
	 * @package jquery
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2012
	 * @link http://www.marcus-povey.co.uk
	 */

	function jquery_init()
	{
		plugin_depends('js_page');
		
		extend_view('js', 'jquery/js');
	}

	register_event('system', 'init', 'jquery_init');
