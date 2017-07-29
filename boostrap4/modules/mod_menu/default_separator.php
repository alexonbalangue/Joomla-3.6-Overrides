<?php
/**
; * @package     Joomla.frontend.Site
; * @subpackage  Templates.cvstart
; *
; * @copyright   Copyright (C) 2012 - 2014. All rights reserved.
; * @author   StartBoostrap, Boostrap, FontAwesome, Converter by Alexon Balangue
; * @license     Free licences
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$title = $item->anchor_title ? ' title="' . $item->anchor_title . '" ' : '';
if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	$linktype = $item->title;
}

?>
	<?php echo $linktype; ?>