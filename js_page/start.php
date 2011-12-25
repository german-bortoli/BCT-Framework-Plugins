<?php
	/**
	 * @file
	 * JS Page support.
	 * 
	 * This is a very simple plugin which uses the page handler to create a virtual
	 * file called script.js in the root of your site out of the 'js' view.
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2011
	 * @link http://www.marcus-povey.co.uk
	 */


	/**
	 * Initialisation for the JS page plugin.
	 */
	function js_page_init()
	{
		// Create page
		register_page('script.js', 'js_page_pagehandler');
		
		// Add link to header
		extend_view('metatags', 'js_page/metatags');
		
		// Add some handy dandy javascript functions
		extend_view('js', 'js_page/js');
	}
	
	/**
	 * Javascript file page handler.
	 *
	 * @param string $page
	 * @param array $subpages
	 */
	function js_page_pagehandler($page, array $subpages)
	{
		global $CONFIG;
		
		include_once($CONFIG->plugins . 'js_page/index.php');
	}
	
	
	register_event('system', 'init', 'js_page_init');
