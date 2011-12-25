<?php
	/**
	 * Show/Hide toggle.
	 *
	 * A control which displays a toggle for toggling hidden divs.
	 *
	 * @package js_page
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2011
	 * @link http://platform.barcamptransparency.org/
	 */


	 $controlling = $vars['controlling_id'];
	 if (!$controlling) $controlling = "toggle_div";

	 $vars['onclick'] .= "showhide('$controlling');";

	 echo "<a href=\"#\" onclick=\"{$vars['onclick']}\">" . htmlentities($vars['value'], ENT_QUOTES, 'UTF-8') . "</a>";