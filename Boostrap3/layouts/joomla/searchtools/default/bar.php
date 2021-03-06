<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\Registry\Registry;

$data = $displayData;

// Receive overridable options
$data['options'] = !empty($data['options']) ? $data['options'] : array();

if (is_array($data['options']))
{
	$data['options'] = new Registry($data['options']);
}

// Options
$filterButton = $data['options']->get('filterButton', true);
$searchButton = $data['options']->get('searchButton', true);

$filters = $data['view']->filterForm->getGroup('filter');
?>

<?php if (!empty($filters['filter_search'])) : ?>
	<?php if ($searchButton) : ?>
		<label for="filter_search" class="sr-only">
			<?php echo JText::_('JSEARCH_FILTER'); ?>
		</label>
		<div class="btn-group">
			<?php echo $filters['filter_search']->input; ?>
			<?php if ($filters['filter_search']->description) : ?>
				<?php JHtmlBootstrap::tooltip('#filter_search', array('title' => JText::_($filters['filter_search']->description))); ?>
			<?php endif; ?>
			<button type="submit" class="btn btn-info hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?>">
				<i class="fa fa-search"></i>
			</button>
		</div>
		<?php if ($filterButton) : ?>
			<div class="hidden-xs">
				<button type="button" class="btn btn-default hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_TOOLS_DESC'); ?>">
					<?php echo JText::_('JSEARCH_TOOLS');?> <span class="caret"></span>
				</button>
			</div>
		<?php endif; ?>
		<div>
			<button type="button" class="btn btn-default hasTooltip" title="<?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?>">
				<?php echo JText::_('JSEARCH_FILTER_CLEAR');?>
			</button>
		</div>
	<?php endif; ?>
<?php endif;
