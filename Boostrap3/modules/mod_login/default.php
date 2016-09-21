<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_SITE . '/components/com_users/helpers/route.php';

JHtml::_('behavior.keepalive');
JHtml::_('bootstrap.tooltip');

?>
<form action="<?php echo JRoute::_(htmlspecialchars(JUri::getInstance()->toString()), true, $params->get('usesecure')); ?>" method="post" id="login-form" class="form-horizontal">
	<?php if ($params->get('pretext')) : ?>
		<div class="pretext">
			<p><?php echo $params->get('pretext'); ?></p>
		</div>
	<?php endif; ?>

		<div id="form-login-username" class="control-group">
			<div class="input-group">
				<?php if (!$params->get('usetext')) : ?>
						<span class="input-group-addon" id="username"">
							<span class="fa fa-user hasTooltip" title="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>"></span>
							<label for="modlgn-username" class="sr-only"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
						</span>
						<input id="modlgn-username" type="text" name="username" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" aria-describedby="username">

				<?php else: ?>
					<span class="input-group-addon" id="username">
						<label for="modlgn-username"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
					</span>
					<input id="modlgn-username" type="text" name="username" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>" aria-describedby="username">
				<?php endif; ?>
			</div>
		</div>
		<div id="form-login-password" class="control-group">
			<div class="input-group">
				<?php if (!$params->get('usetext')) : ?>
						<span class="input-group-addon" id="password">
							<span class="fa fa-lock hasTooltip" title="<?php echo JText::_('JGLOBAL_PASSWORD') ?>"></span>
								<label for="modlgn-passwd" class="sr-only"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
						</span>
						<input id="modlgn-passwd" type="password" name="password" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>"  aria-describedby="password">

				<?php else: ?>
					<span class="input-group-addon" id="password">
						<label for="modlgn-passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
					</span>
					<input id="modlgn-passwd" type="password" name="password" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>"  aria-describedby="password">
				<?php endif; ?>
			</div>
		</div>
		<?php if (count($twofactormethods) > 1): ?>
		<div id="form-login-secretkey" class="control-group">
			<div id="form-login-secretkey" class="input-group input-group-lg">
				<?php if (!$params->get('usetext')) : ?>
					<span class="input-group-addon">
						<span class="fa fa-star-o hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>"></span>
						<label for="modlgn-secretkey" class="sr-only"><?php echo JText::_('JGLOBAL_SECRETKEY'); ?></label>		
					</span>
					<input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>">
					<span class="input-group-btn">
						<span class="btn btn-info hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>">
							<i class="fa fa-question"></i>
						</span>
					</span>
				<?php else: ?>
					<span class="input-group-addon">
						<label for="modlgn-secretkey"><?php echo JText::_('JGLOBAL_SECRETKEY') ?></label>
					</span>
					<input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="form-control" tabindex="0" size="18" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" />
					<span class="input-group-btn">
						<span class="btn btn-info hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>">
							<i class="fa fa-question"></i>
						</span>
					</span>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
		<div id="form-login-remember" class="checkbox">
			<label for="modlgn-remember" class="sr-only"><?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?></label> <input id="modlgn-remember" type="checkbox" name="remember" value="yes">
			<?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?>
		</div>
		<?php endif; ?>
		<div id="form-login-submit" class="control-group">
			<div class="controls">
				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary"><?php echo JText::_('JLOGIN') ?></button>
			</div>
		</div>
		<?php
			$usersConfig = JComponentHelper::getParams('com_users'); ?>
			<div class="btn-group btn-group-vertical btn-group-justified btn-group-lg" role="group" aria-label="members"> 	
				<?php if ($usersConfig->get('allowUserRegistration')) : ?>
					<a href="<?php echo JRoute::_('index.php?option=com_users&view=registration&Itemid=' . UsersHelperRoute::getRegistrationRoute()); ?>" class="btn btn-default" role="button"><?php echo JText::_('MOD_LOGIN_REGISTER'); ?></a> 
				<?php endif; ?>
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=remind&Itemid=' . UsersHelperRoute::getRemindRoute()); ?>" class="btn btn-default" role="button"><?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a> 
				<a href="<?php echo JRoute::_('index.php?option=com_users&view=reset&Itemid=' . UsersHelperRoute::getResetRoute()); ?>" class="btn btn-default" role="button"><?php echo JText::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a> 
			</div>
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="<?php echo $return; ?>" />
		<?php echo JHtml::_('form.token'); ?>

	<?php if ($params->get('posttext')) : ?>
		<div class="posttext">
			<p><?php echo $params->get('posttext'); ?></p>
		</div>
	<?php endif; ?>
</form>
