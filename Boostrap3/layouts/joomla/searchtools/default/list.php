<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

$data = $displayData;

// Load the form list fields
$list = $data['view']->filterForm->getGroup('list');
?>
<?php if ($list) : ?>
	<div class="hidden-xs">
		<?php foreach ($list as $fieldName => $field) : ?>
			<div>
				<?php echo $field->input; ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
