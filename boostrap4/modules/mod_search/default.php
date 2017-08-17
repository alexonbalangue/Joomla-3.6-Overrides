<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
//JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', false, true);

if ($width)
{
	$moduleclass_sfx .= ' ' . 'mod_search' . $module->id;
	$css = 'div.mod_search' . $module->id . ' input[type="search"]{ width:auto; }';
	JFactory::getDocument()->addStyleDeclaration($css);
	$width = ' size="' . $width . '"';
}
else
{
	$width = '';
}
?>
<div class="<?php echo $moduleclass_sfx ?>">
	<form action="<?php echo JRoute::_('index.php');?>" method="post" class="form-inline">
	
		<div class="input-group input-group-lg">
		<?php
			$output = '<span class="input-group-addon"><i class="fa fa-search fa-2x"></i><label for="mod-search-searchword" class="sr-only">' . $label . '</label></span>';
			$output .= '<input name="searchword" id="mod-search-searchword" maxlength="' . $maxlength . '"  class="form-control" type="search"' . $width;
			$output .= ' placeholder="' . $text . '">';

			if ($button) :
				if ($imagebutton) ://Not take the default config & not need because use font-awesome
					$btn_output = '<span class="input-group-btn"><button class="btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button></span>';
				else :
					$btn_output = '<span class="input-group-btn"><button class="btn btn-primary" onclick="this.form.searchword.focus();">' . $button_text . '</button></span>';
				endif;

				switch ($button_pos) :
					case 'top' :
						$output = $btn_output . '<br />' . $output;
						break;

					case 'bottom' :
						$output .= '<br />' . $btn_output;
						break;

					case 'right' :
						$output .= $btn_output;
						break;

					case 'left' :
					default :
						$output = $btn_output . $output;
						break;
				endswitch;
			endif;

			echo $output;
		?>
		</div>
		<input type="hidden" name="task" value="search" />
		<input type="hidden" name="option" value="com_search" />
		<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
	</form>
</div>
