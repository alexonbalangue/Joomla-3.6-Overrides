<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_whosonline
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($showmode == 0 || $showmode == 2) : ?>
	<?php $guest = JText::plural('MOD_WHOSONLINE_GUESTS', $count['guest']); ?>
	<?php $member = JText::plural('MOD_WHOSONLINE_MEMBERS', $count['user']); ?>
	<p><?php echo JText::sprintf('MOD_WHOSONLINE_WE_HAVE', $guest, $member); ?></p>
<?php endif; ?>

<?php if (($showmode > 0) && count($names)) : ?>
	<ul class="list-group<?php echo $moduleclass_sfx ?>" >
	<?php if ($params->get('filter_groups')):?>
		<li class="list-group-item"><?php echo JText::_('MOD_WHOSONLINE_SAME_GROUP_MESSAGE'); ?></li>
	<?php endif;?>
	<?php foreach ($names as $name) : ?>
		<li class="list-group-item">
			<?php echo $name->username; ?>
		</li>
	<?php endforeach;  ?>
	</ul>
<?php endif;
