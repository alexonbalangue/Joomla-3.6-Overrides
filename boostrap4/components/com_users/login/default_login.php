<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
?>
<div class="<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	<div class="text-center">
	<?php endif; ?>

		<?php if ($this->params->get('logindescription_show') == 1) : ?>
			<?php echo $this->params->get('login_description'); ?>
		<?php endif; ?>

		<?php if (($this->params->get('login_image') != '')) :?>
			<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="" alt="<?php echo JText::_('COM_USERS_LOGIN_IMAGE_ALT')?>">
		<?php endif; ?>

	<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
	</div>
	<?php endif; ?>

	<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-inline">

			<?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
				<?php if (!$field->hidden) : ?>
					<div class="form-group">
							<?php echo $field->label; ?>
							<?php echo $field->input; ?>
						
					</div>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if ($this->tfa): ?>
				<div class="form-group">
						<?php echo $this->form->getField('secretkey')->label; ?>
						<?php echo $this->form->getField('secretkey')->input; ?>
					
				</div>
			<?php endif; ?>

			<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<div  class="form-group">
				<label><?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME') ?></label>
				<input id="remember" type="checkbox" name="remember" class="inputbox" value="yes">
			</div>
			<?php endif; ?>

			<div class="form-group">
					<button type="submit" class="btn btn-primary">
						<?php echo JText::_('JLOGIN'); ?>
					</button>
			</div>

			<?php if ($this->params->get('login_redirect_url')) : ?>
				<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_url', $this->form->getValue('return'))); ?>" />
			<?php else : ?>
				<input type="hidden" name="return" value="<?php echo base64_encode($this->params->get('login_redirect_menuitem', $this->form->getValue('return'))); ?>" />
			<?php endif; ?>
			<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
<div class="btn-group btn-group-lg btn-group-justified">
	<a class="btn btn-secondary" href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>"><?php echo JText::_('COM_USERS_LOGIN_RESET'); ?></a>
	<a class="btn btn-secondary" href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>"><?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?></a>
	<?php
		$usersConfig = JComponentHelper::getParams('com_users');
		if ($usersConfig->get('allowUserRegistration')) : ?>
			<a class="btn btn-secondary" href="<?php echo JRoute::_('index.php?option=com_users&view=registration'); ?>"><?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?></a>
	<?php endif; ?>
</div>
