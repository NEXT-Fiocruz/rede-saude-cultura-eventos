<?php /* Smarty version 2.6.26, created on 2012-10-10 01:12:49
         compiled from user/createAccount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'user/createAccount.tpl', 16, false),array('function', 'translate', 'user/createAccount.tpl', 18, false),array('function', 'fieldLabel', 'user/createAccount.tpl', 46, false),array('function', 'form_language_chooser', 'user/createAccount.tpl', 49, false),array('modifier', 'assign', 'user/createAccount.tpl', 21, false),array('modifier', 'escape', 'user/createAccount.tpl', 30, false),array('modifier', 'nl2br', 'user/createAccount.tpl', 197, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "navigation.account"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>
 

<form name="createAccount" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createAccount'), $this);?>
">

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.completeForm"), $this);?>
</p>

<?php if (! $this->_tpl_vars['existingUser']): ?>
  <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'account','existingUser' => 1), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

  <p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.hasAccount",'accountUrl' => $this->_tpl_vars['url']), $this);?>
</p>
<?php else: ?>
  <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'account'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

  <p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.hasNoAccount",'accountUrl' => $this->_tpl_vars['url']), $this);?>
</p>
  <input type="hidden" name="existingUser" value="1"/>
<?php endif; ?>

<?php if ($this->_tpl_vars['source']): ?>
  <input type="hidden" name="source" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />
<?php endif; ?>

<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.profile"), $this);?>
</h3>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['existingUser']): ?>
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.loginToRegister"), $this);?>
</p>
<?php endif; ?>


<table class="data" width="100%">
<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1 && ! $this->_tpl_vars['existingUser']): ?>
  <tr valign="top">
    <td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
    <td width="80%" class="value">
      <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'account','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'createAccountUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'createAccountUrl'));?>

      <?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'createAccount','url' => $this->_tpl_vars['createAccountUrl']), $this);?>

      <span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
    </td>
  </tr>
<?php endif; ?>
<tr valign="top"> 
  <td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
  <td width="80%" class="value"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="textField" /></td>
</tr>
<?php if (! $this->_tpl_vars['existingUser']): ?>
<tr valign="top">
  <td></td>
  <td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.usernameRestriction"), $this);?>
</td>
</tr>
<?php endif; ?>
  
<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.password"), $this);?>
</td>
  <td class="value"><input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="password" size="20" maxlength="32" class="textField" /></td>
</tr>

<?php if (! $this->_tpl_vars['existingUser']): ?>
<tr valign="top">
  <td></td>
  <td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.passwordLengthRestriction",'length' => $this->_tpl_vars['minPasswordLength']), $this);?>
</td>
</tr>
<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password2','required' => 'true','key' => "user.account.repeatPassword"), $this);?>
</td>
  <td class="value"><input type="password" name="password2" id="password2" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password2'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
</tr>

<?php if ($this->_tpl_vars['captchaEnabled']): ?>
  <tr>
    <td class="label" valign="top"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'captcha','required' => 'true','key' => "common.captchaField"), $this);?>
</td>
    <td class="value">
      <img src="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'viewCaptcha','path' => $this->_tpl_vars['captchaId']), $this);?>
" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.altText"), $this);?>
" /><br />
      <span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.captchaField.description"), $this);?>
</span><br />
      <input name="captcha" id="captcha" value="" size="20" maxlength="32" class="textField" />
      <input type="hidden" name="captchaId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['captchaId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quoted') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'quoted')); ?>
" />
    </td>
  </tr>
<?php endif; ?>

<tr valign="top">
  <td class="label">Nome*</td>
  <td class="value"><input type="text" id="firstName" name="firstName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="40" class="textField" /></td>
</tr>

  
<tr valign="top">
  <td class="label">Sobrenome*</td>
  <td class="value"><input type="text" id="lastName" name="lastName" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['lastName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation",'required' => 'true'), $this);?>
</td>
  <td class="value"><textarea name="affiliation" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>


<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
  <td class="value"><input type="text" id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>


</table>

<div class="separator"></div>
<br/>
<p>O evento Iº Conexão Internacional Saúde e (Ciber) Cultura da
 <strong>Semana Nacional Ciência, Cultura e Saúde</strong> acontecerá na 
 <a href="http://www.next.icict.fiocruz.br/sec/" target="_blank">Rede Saúde e Cultura na internet</a><br/>
 </p>
<br/>
<p> Para saber mais sobre a Rede Saúde e Cultura na internet acesse o 
<a href="http://www.next.icict.fiocruz.br/sec/sobre">Sobre a rede na internet</a>
</p>
<br/>
<table class="data" width="100%">

<tr valign="top">
 <td class="label">Você gostaria de participar da 
 <a href="http://www.next.icict.fiocruz.br/sec/" target="_blank">Rede Saúde e Cultura na internet</a>
 e aceita os <a href="http://www.next.icict.fiocruz.br/sec/termos-de-servico">termos de serviço da rede</a>?
 </td>
</tr>

<tr valign="top">
 
  <td class="value">
    <select name="participardarede" id="participardarede" class="selectMenu">
      <option value="1">Sim eu quero participar da Rede da Rede Saúde e Cultura na internet</option>
      <option value="0">Não quero participar ou não concordo com os termos da rede</option>
    </select>
  </td>
  
</tr>

</table>

<div class="separator"></div>
<br/>

<table class="data" width="100%">
<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'sendPassword','key' => "user.sendPassword"), $this);?>
</td>
  <td class="value">
    <input type="checkbox" name="sendPassword" id="sendPassword" value="1"<?php if ($this->_tpl_vars['sendPassword']): ?> checked="checked"<?php endif; ?> /> <label for="sendPassword"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.sendPassword.description"), $this);?>
</label>
  </td>
</tr>

<?php if (count ( $this->_tpl_vars['availableLocales'] ) > 1): ?>
<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.workingLanguages"), $this);?>
</td>
  <td class="value"><?php $_from = $this->_tpl_vars['availableLocales']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['localeKey'] => $this->_tpl_vars['localeName']):
?>
    <input type="checkbox" name="userLocales[]" id="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"<?php if (in_array ( $this->_tpl_vars['localeKey'] , $this->_tpl_vars['userLocales'] )): ?> checked="checked"<?php endif; ?> /> <label for="userLocales-<?php echo ((is_array($_tmp=$this->_tpl_vars['localeKey'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['localeName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</label><br />
  <?php endforeach; endif; unset($_from); ?></td>
</tr>
<?php endif; ?>
<?php endif; ?> 
  
<?php if (( $this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null ) || $this->_tpl_vars['enableOpenAccessNotification'] || ( $this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null ) || ( $this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null )): ?>
<tr valign="top">
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('suppressId' => 'true','name' => 'createAs','key' => "user.account.createAs"), $this);?>
</td>
  <td class="value">
    <?php if ($this->_tpl_vars['allowRegReader'] || $this->_tpl_vars['allowRegReader'] === null): ?>
      <input type="checkbox" name="createAsReader" id="createAsReader" value="1"<?php if ($this->_tpl_vars['createAsReader']): ?> checked="checked"<?php endif; ?> /> <label for="createAsReader"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.readerDescription"), $this);?>
<br />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['enableOpenAccessNotification']): ?>
      <input type="checkbox" name="openAccessNotification" id="openAccessNotification" value="1"<?php if ($this->_tpl_vars['openAccessNotification']): ?> checked="checked"<?php endif; ?> /> <label for="openAccessNotification"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reader"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.openAccessNotificationDescription"), $this);?>
<br />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['allowRegAuthor'] || $this->_tpl_vars['allowRegAuthor'] === null): ?>
      <input type="checkbox" name="createAsAuthor" id="createAsAuthor" value="1"<?php if ($this->_tpl_vars['createAsAuthor']): ?> checked="checked"<?php endif; ?> /> <label for="createAsAuthor"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</label>: <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.authorDescription"), $this);?>
<br />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['allowRegReviewer'] || $this->_tpl_vars['allowRegReviewer'] === null): ?><input type="checkbox" name="createAsReviewer" id="createAsReviewer" value="1"<?php if ($this->_tpl_vars['createAsReviewer']): ?> checked="checked"<?php endif; ?> /> <label for="createAsReviewer"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.reviewer"), $this);?>
</label>: <?php if ($this->_tpl_vars['existingUser']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.reviewerDescriptionNoInterests"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.reviewerDescription"), $this);?>
 <input type="text" name="interests[<?php echo ((is_array($_tmp=$this->_tpl_vars['formLocale'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['interests'][$this->_tpl_vars['formLocale']])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /><?php endif; ?>
    <?php endif; ?>
  </td>
</tr>
<?php endif; ?>
</table>

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.createAccount"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'index'), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

<?php if ($this->_tpl_vars['privacyStatement']): ?>
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.account.privacyStatement"), $this);?>
</h3>
<p><?php echo ((is_array($_tmp=$this->_tpl_vars['privacyStatement'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
<?php endif; ?>
</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>