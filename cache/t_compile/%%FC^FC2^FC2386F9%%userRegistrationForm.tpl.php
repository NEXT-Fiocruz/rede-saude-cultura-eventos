<?php /* Smarty version 2.6.26, created on 2012-10-18 16:20:05
         compiled from registration/userRegistrationForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'registration/userRegistrationForm.tpl', 16, false),array('function', 'fieldLabel', 'registration/userRegistrationForm.tpl', 25, false),array('function', 'form_language_chooser', 'registration/userRegistrationForm.tpl', 28, false),array('function', 'translate', 'registration/userRegistrationForm.tpl', 29, false),array('function', 'mailto', 'registration/userRegistrationForm.tpl', 243, false),array('modifier', 'escape', 'registration/userRegistrationForm.tpl', 17, false),array('modifier', 'assign', 'registration/userRegistrationForm.tpl', 27, false),array('modifier', 'nl2br', 'registration/userRegistrationForm.tpl', 41, false),array('modifier', 'strip_unsafe_html', 'registration/userRegistrationForm.tpl', 72, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "schedConf.registration"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>
 

<form action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'register'), $this);?>
" name="registration" method="post">
<input type="hidden" name="registrationTypeId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['registrationTypeId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['formLocales'] ) > 1 && ! $this->_tpl_vars['existingUser']): ?>
<div id="locales">
<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'formLocale','key' => "form.formLanguage"), $this);?>
</td>
		<td width="80%" class="value">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'registration','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'registerUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'registerUrl'));?>

			<?php echo $this->_plugins['function']['form_language_chooser'][0][0]->smartyFormLanguageChooser(array('form' => 'registration','url' => $this->_tpl_vars['registerUrl']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.formLanguage.description"), $this);?>
</span>
		</td>
	</tr>
</table>
</div>
<?php endif; ?>

<?php $this->assign('registrationAdditionalInformation', $this->_tpl_vars['schedConf']->getLocalizedSetting('registrationAdditionalInformation')); ?>
<?php if ($this->_tpl_vars['registrationAdditionalInformation']): ?>
<div id="registrationAdditionalInformation">
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationPolicies.registrationAdditionalInformation"), $this);?>
</h3>

	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['registrationAdditionalInformation'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
</div>
	<div class="separator"></div>
<?php endif; ?>

<div id="account">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.account"), $this);?>
</h3>
<?php if ($this->_tpl_vars['userLoggedIn']): ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'signOut','source' => $this->_tpl_vars['requestUri']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'logoutUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'logoutUrl'));?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => 'profile'), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'profileUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'profileUrl'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.loggedInAs",'logoutUrl' => $this->_tpl_vars['logoutUrl'],'profileUrl' => $this->_tpl_vars['profileUrl']), $this);?>
</p>

	<table class="data" width="100%">
		<tr valign="top">
			<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
			<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.email"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getEmail())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.phone"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getPhone())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.fax"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->getFax())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		</tr>
		<tr valign="top">
			<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</td>
			<td class="value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['user']->getMailingAddress())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		</tr>
	</table>
<?php else: ?>
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'index','source' => $this->_tpl_vars['requestUri']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'loginUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'loginUrl'));?>

	<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.createAccount.description",'loginUrl' => $this->_tpl_vars['loginUrl']), $this);?>
</p>

	<table class="data" width="100%">
		<tr valign="top">	
			<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'username','required' => 'true','key' => "user.username"), $this);?>
</td>
			<td width="80%" class="value"><input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="username" size="20" maxlength="32" class="textField" /></td>
	</tr>

	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'password','required' => 'true','key' => "user.password"), $this);?>
</td>
		<td class="value"><input type="password" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" id="password" size="20" maxlength="32" class="textField" /></td>
	</tr>

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
  <td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'email','required' => 'true','key' => "user.email"), $this);?>
</td>
  <td class="value"><input type="text" id="email" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
  <td class="label">CPF:*</td>
  <td class="value"><input type="text" id="cpf" name="cpf" value="<?php echo $_POST['cpf']; ?>
" size="30" maxlength="90" class="textField" /></td>
</tr>

<tr valign="top">
  <td class="label">Telefone fixo ou celular de contato</td>
  <td class="value"><input type="text" name="phone" id="phone" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="15" maxlength="24" class="textField" /></td>
</tr>

<tr valign="top">
	<td class="label">Nome completo da <?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'affiliation','key' => "user.affiliation",'required' => 'true'), $this);?>
 onde atua</td>
	<td class="value"><textarea id="affiliation" name="affiliation" rows="5" cols="40" class="textArea"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</textarea></td>
</tr>

</table>
<div class="separator"></div>
<table class="data" width="100%">

<tr valign="top">
  <td class="label"><strong>Informe a natureza da sua atuação:</strong><br/><br/></td>
</tr>  
<tr valign="top">  
  <td class="value">
    <input type="checkbox" name="naturezaatuacao[]" value="a">Profissional de Saúde<br>
    <input type="checkbox" name="naturezaatuacao[]" value="b">Profissional de Educação<br>
    <input type="checkbox" name="naturezaatuacao[]" value="c">Profissional de Cultura<br>
    <input type="checkbox" name="naturezaatuacao[]" value="d">Cargo de Chefia na Adm. Pública<br>
    <input type="checkbox" name="naturezaatuacao[]" value="e">Artista, Promotor Cultural, Artesão<br>
    <input type="checkbox" name="naturezaatuacao[]" value="f">Militante de movimento social<br>
    <input type="checkbox" name="naturezaatuacao[]" value="g">Estudante<br>
    <input type="checkbox" name="naturezaatuacao[]" value="h">Pesquisador<br>
    <input type="checkbox" name="naturezaatuacao[]" value="i">Voluntário<br>
    Outro, especifique: <input type="text" name="naturezaatuacaooutro" <?php echo $_POST['naturezaatuacaooutro']; ?>
"><br>
  </td>
</tr>
 
</table>
<div class="separator"></div>
<table class="data" width="100%">

<tr valign="top">
  <td class="label"><strong>Quais, dentre os temas abaixo, você gostaria de discutir durante o Encontro
Nacional da Rede Saúde e Cultura? (indique até duas prioridades):</strong><br/><br/></td>
</tr>
<tr valign="top">
  <td class="value">
    <input type="checkbox" name="temas[]" value="a">Práticas Tradicionais em Saúde<br>
    <input type="checkbox" name="temas[]" value="b">Práticas integrativas e complementares em saúde<br>
    <input type="checkbox" name="temas[]" value="c">Equidade em saúde e cultura<br>
    <input type="checkbox" name="temas[]" value="d">Saúde Indígena<br>
    <input type="checkbox" name="temas[]" value="e">Saúde Mental<br>
    <input type="checkbox" name="temas[]" value="f">A Arte e o cuidado à saúde (promoção, prevenção e reestabelecimento da
saúde)<br>
    <input type="checkbox" name="temas[]" value="g">Controle social, participação e solidariedade<br>
    <input type="checkbox" name="temas[]" value="h">Acesso a conhecimentos e expressões culturais tradicionais<br>
    <input type="checkbox" name="temas[]" value="i">Necessidades de formação para apoiar a gestão, os serviços e as práticas na
interface saúde e cultura<br>  
  <br>
  </td>
</tr>

</table>

<input type="hidden" value="." name="mailingAddress" /> 

<input type="hidden" value="BR" name="country" />	



<div class="separator"></div>
<br/>
<p>O evento Iº Conexão Internacional Saúde e (Ciber) Cultura da
 <strong>Semana Nacional Ciência, Cultura e Saúde</strong> acontecerá na 
 <a href="http://www.next.icict.fiocruz.br/sec/" target="_blank">Rede Saúde e Cultura na internet</a><br/>
 </p>
<br/>
<p> Para saber mais sobre a Rede Saúde e Cultura na internet acesse o 
<a href="http://www.next.icict.fiocruz.br/sec/sobre" target="_blank">Sobre a rede na internet</a>
</p>
<br/>
<table class="data" width="100%">

<tr valign="top">
 <td class="label">Você gostaria de participar da 
 <a href="http://www.next.icict.fiocruz.br/sec/" target="_blank">Rede Saúde e Cultura na internet</a>
 e aceita os <a href="http://www.next.icict.fiocruz.br/sec/termos-de-servico" target="_blank">termos de serviço da rede</a>?
 </td>
</tr>

<tr valign="top">
  <td class="value">
    <select name="participardarede" id="participardarede" class="selectMenu">
      <option value="1">Sim, eu gostaria de participar da Rede da Rede Saúde e Cultura na internet</option>
      <option value="0">Não gostaria de participar ou não concordo com os termos da rede</option>
    </select>
  </td>
  
</tr>

</table>

<?php endif; ?></div>
<div class="separator"></div>

<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationName')): ?>
<div id="registrationContact">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.registrationPolicies.registrationContact"), $this);?>
</h3>

<table class="data" width="100%">
	<tr valign="top">
		<td width="20%" class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.name"), $this);?>
</td>
		<td width="80%" class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationName'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationEmail')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.email"), $this);?>
</td>
		<td class="value"><?php echo smarty_function_mailto(array('address' => ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationEmail'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)),'encode' => 'hex'), $this);?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationPhone')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.phone"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationPhone'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationFax')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact.fax"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationFax'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
	</tr><?php endif; ?>
	<?php if ($this->_tpl_vars['currentSchedConf']->getSetting('registrationMailingAddress')): ?><tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.mailingAddress"), $this);?>
</td>
		<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['currentSchedConf']->getSetting('registrationMailingAddress'))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
	</tr><?php endif; ?>
</table>
</div>
<div class="separator"></div>
<?php endif; ?>
<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "schedConf.registration.register"), $this);?>
" class="button defaultButton" /></p>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>