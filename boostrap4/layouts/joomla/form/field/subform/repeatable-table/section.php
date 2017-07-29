<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Make thing clear
 *
 * @var JForm   $form       The form instance for render the section
 * @var string  $basegroup  The base group name
 * @var string  $group      Current group name
 * @var array   $buttons    Array of the buttons that will be rendered
 */
extract($displayData);

?>

<tr data-base-name="<?php echo $basegroup; ?>" data-group="<?php echo $group; ?>">
	<?php foreach($form->getGroup('') as $field): ?>
	<td>
		<?php echo $field->renderField(); ?>
	</td>
	<?php endforeach; ?>
	<?php if (!empty($buttons)):?>
	<td>
		<div class="btn-group">
			<?php if (!empty($buttons['add'])):?><a class="btn btn-success"><i class="fa fa-plus"></i> </a><?php endif;?>
			<?php if (!empty($buttons['remove'])):?><a class="btn btn-danger"><span class="fa fa-minus"></span> </a><?php endif;?>
			<?php if (!empty($buttons['move'])):?><a class="btn btn-primary"><span class="fa fa-arrows"></span> </a><?php endif;?>
		</div>
	</td>
	<?php endif; ?>
</tr>
