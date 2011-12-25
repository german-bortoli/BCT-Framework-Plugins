<?php
	/**
	 * @file
	 * JQuery UI support.
	 * 
	 * A wrapper around the JQuery UI library. You will need to skin the library using one of 
	 * the UI CSS wrappers.
	 * 
	 * @package jquery_ui
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2011
	 * @link http://www.marcus-povey.co.uk
	 */

	function jquery_ui_init()
	{
		plugin_depends('js_page');
		plugin_depends('jquery');
		
		extend_view('js', 'jquery_ui/js');
	}

	register_event('system', 'init', 'jquery_ui_init');
