<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$lang = JFactory::getLanguage();
$upper_limit = $lang->getUpperLimitSearchWord();
?>
<form id="searchForm" class="form-inline text-center" action="<?php echo JRoute::_('index.php?option=com_search');?>" method="post">

	<div class="input-group input-group-lg">
		<label for="searchword" class="sr-only">
			<?php echo JText::_('COM_FINDER_SEARCH_TERMS'); ?>
		</label>
		<span class="input-group-addon" id="form-searching"><i class="fa fa-search"></i></span>
		<input type="text" name="searchword" placeholder="<?php echo JText::_('COM_SEARCH_SEARCH_KEYWORD'); ?>" id="search-searchword" size="30" maxlength="<?php echo $upper_limit; ?>" value="<?php echo $this->escape($this->origkeyword); ?>" class="form-control" aria-describedby="form-searching">
		<div class="input-group-btn">
			<button name="Search" onclick="this.form.submit()" class="btn hasTooltip" title="<?php echo JHtml::tooltipText('COM_SEARCH_SEARCH');?>">
			<?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
		</div>		
		<input type="hidden" name="task" value="search" />
		<div class="clearfix"></div>
	</div>

	<div class="<?php echo $this->params->get('pageclass_sfx'); ?>">
		<?php if (!empty($this->searchword)):?>
		<p><?php echo JText::plural('COM_SEARCH_SEARCH_KEYWORD_N_RESULTS', '<i class="badge badge-pill badge-info badge badge-pill badge-info-info">' . $this->total . '</i>');?></p>
		<?php endif;?>
	</div>

	<?php if ($this->params->get('search_phrases', 1)) : ?>
		<fieldset class="phrases">
			<legend><?php echo JText::_('COM_SEARCH_FOR');?>
			</legend>
				<div class="phrases-box">
				<?php echo $this->lists['searchphrase']; ?>
				</div>
				<div class="ordering-box">
				<label for="ordering" class="ordering">
					<?php echo JText::_('COM_SEARCH_ORDERING');?>
				</label>
				<?php echo $this->lists['ordering'];?>
				</div>
		</fieldset>
	<?php endif; ?>

	<?php if ($this->params->get('search_areas', 1)) : ?>
		<fieldset class="only">
			<legend><?php echo JText::_('COM_SEARCH_SEARCH_ONLY');?></legend>
			<?php foreach ($this->searchareas['search'] as $val => $txt) :
				$checked = is_array($this->searchareas['active']) && in_array($val, $this->searchareas['active']) ? 'checked="checked"' : '';
			?>
			<label for="area-<?php echo $val;?>" class="checkbox">
				<input type="checkbox" name="areas[]" value="<?php echo $val;?>" id="area-<?php echo $val;?>" <?php echo $checked;?> >
				<?php echo JText::_($txt); ?>
			</label>
			<?php endforeach; ?>
		</fieldset>
	<?php endif; ?>

<?php if ($this->total > 0) : ?>

	<div class="form-limit">
		<label for="limit">
			<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>
		</label>
		<?php echo $this->pagination->getLimitBox(); ?>
	</div>
<p class="counter">
		<?php echo $this->pagination->getPagesCounter(); ?>
	</p>

<?php endif; ?>

</form>
