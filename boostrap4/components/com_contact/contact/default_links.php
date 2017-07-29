<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
	<?php echo JHtml::_('bootstrap.addSlide', 'slide-contact', JText::_('COM_CONTACT_LINKS'), 'display-links'); ?>
<?php endif; ?>
<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
	<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'display-links', JText::_('COM_CONTACT_LINKS')); ?>
<?php endif; ?>
<?php if ($this->params->get('presentation_style') == 'plain'):?>
	<?php echo '<h3>' . JText::_('COM_CONTACT_LINKS') . '</h3>';  ?>
<?php endif; ?>

	<ul class="nav nav-tabs nav-stacked">
		<?php
		// Letters 'a' to 'e'
		foreach (range('a', 'e') as $char) :
			$link = $this->contact->params->get('link' . $char);
			$label = $this->contact->params->get('link' . $char . '_name');

			if (!$link) :
				continue;
			endif;

			// Add 'https://' if not present = require ssl
			$link = (0 === strpos($link, 'https')) ? $link : 'https://' . $link;

			// If no label is present, take the link
			$label = ($label) ? $label : $link;
			?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $link; ?>" itemprop="url">
					<?php echo $label; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

<?php if ($this->params->get('presentation_style') == 'sliders') : ?>
	<?php echo JHtml::_('bootstrap.endSlide'); ?>
<?php endif; ?>
<?php if ($this->params->get('presentation_style') == 'tabs') : ?>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
<?php endif; ?>
