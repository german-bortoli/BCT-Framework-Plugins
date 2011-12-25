<?php
	/**
	 * @file
	 * CSS Page support.
	 * 
	 * This is a very simple plugin which uses the page handler to create a virtual
	 * file called style.css in the root of your site out of the 'css' view.
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2011
	 * @link http://www.marcus-povey.co.uk
	 */


	/**
	 * Initialisation for the CSS page plugin.
	 */
	function css_page_init()
	{
		// Create page
		register_page('style.css', 'css_page_pagehandler');
		
		// Add link to header
		extend_view('metatags', 'css_page/metatags');
	}
	
	/**
	 * CSS file page handler.
	 *
	 * @param string $page
	 * @param array $subpages
	 */
	function css_page_pagehandler($page, array $subpages)
	{
		global $CONFIG;
		
		include_once($CONFIG->plugins . 'css_page/index.php');
	}
	
	
	register_event('system', 'init', 'css_page_init');
