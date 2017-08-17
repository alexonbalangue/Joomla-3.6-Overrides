<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
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
			<div class="form-group row">
				<?php if (!$params->get('usetext')) : ?>
					<label for="modlgn-username" class="sr-only"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-user"></i></div> <input id="modlgn-username" autocomplete="off" type="text" name="username" class="form-control col col-5 form-control-lg" tabindex="0" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>">
					</div>	
				<?php else: ?>
					
    <label for="modlgn-username3" class="col col-2  form-control-label"><?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?></label>
    <input id="modlgn-username" type="text" name="username" class="form-control col col-5 form-control-lg" tabindex="0" placeholder="<?php echo JText::_('MOD_LOGIN_VALUE_USERNAME') ?>">

				<?php endif; ?>
			</div>

			<div class="form-group row">
				<?php if (!$params->get('usetext')) : ?>
					<label for="modlgn-password" class="sr-only"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-lock"></i></div>
					<input id="modlgn-password" autocomplete="off" type="password" name="password" class="form-control col col-5 form-control-lg" tabindex="0" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>">
					</div>	
				<?php else: ?>
					<label for="modlgn-passwd" class="col col-2  form-control-label"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
					<div class="col col-md-4">
					  <input type="password" name="password" tabindex="0" class="form-control col col-5 form-control-lg" id="modlgn-passwd" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>">
					</div>	

				<?php endif; ?>
			</div>
		<?php if (count($twofactormethods) > 1): ?>
			<div class="form-group row">
				<?php if (!$params->get('usetext')) : ?>
						<label for="modlgn-secretkey" class="sr-only"><?php echo JText::_('JGLOBAL_SECRETKEY') ?></label>
					<div class="input-group">
					<div class="input-group-addon"><i class="fa fa-star"></i></div>
					 <input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="form-control col col-5 form-control-lg" tabindex="0" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" />
					  <div class="input-group-addon">
						<span class="btn width-auto hasTooltip" title="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>">
						  <i class="fa fa-question-circle"></i>
						</span>
					</div>	
					</div>	
				<?php else: ?>
					<label for="modlgn-secretkey" class="col col-2  form-control-label"><?php echo JText::_('JGLOBAL_SECRETKEY') ?></label>
					<div class="input-group">
					  <input id="modlgn-secretkey" autocomplete="off" type="text" name="secretkey" class="form-control col col-5 form-control-lg" tabindex="0" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" />	
					<span class="btn width-auto hasTooltip col col-2" title="<?php echo JText::_('JGLOBAL_SECRETKEY_HELP'); ?>">
						  <i class="fa fa-question-circle"></i>
						</span>
					</div>					
				<?php endif; ?>

			</div>
			
		<?php endif; ?>
		  <div class="form-group row">
		<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
			<div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
			  <div id="modlgn-remember" class="checkbox">
				<label for="modlgn-remember">
				  <input id="modlgn-remember" type="checkbox" name="remember" class="inputbox" value="yes"> <?php echo JText::_('MOD_LOGIN_REMEMBER_ME') ?>
				</label>
			  </div>
			</div>
		<?php endif; ?>
		  </div>
		<div id="form-login-submit" class="form-group row">
			<div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
				<button type="submit" tabindex="0" name="Submit" class="btn btn-primary"><?php echo JText::_('JLOGIN') ?></button>
			</div>
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
