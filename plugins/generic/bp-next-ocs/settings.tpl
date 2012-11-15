{**
 * settings.tpl
 *
 * Copyright (c) 2012 Alberto Souza
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * bp-next-ocs authentication source settings.
 *
 * $Id$
 *}
<br />

<h3>{translate key="plugins.auth.bpnextocs.settings"}</h3>

wordpress_db_name
wordpress_db_prefix
wordpress_db_user
wordpress_db_user_pass
<table class="data" width="100%">
	<tr valign="top">
		<td class="label">{fieldLabel name="wordpress_db_name" key="plugins.auth.bpnextocs.settings.saslprop"}</td>
		<td class="value">
			<input type="text" id="saslprop" name="settings[saslprop]" value="{$settings.wordpress_db_name|escape}" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
	<tr valign="top">
		<td class="label">{fieldLabel name="wordpress_db_prefix" key="plugins.auth.bpnextocs.settings.saslprop"}</td>
		<td class="value">
			<input type="text" id="saslprop" name="settings[saslprop]" value="{$settings.wordpress_db_prefix|escape}" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
 	<tr valign="top">
		<td class="label">{fieldLabel name="wordpress_db_user" key="plugins.auth.bpnextocs.settings.saslprop"}</td>
		<td class="value">
			<input type="text" id="saslprop" name="settings[saslprop]" value="{$settings.wordpress_db_user|escape}" size="30" maxlength="255" class="textField" />
		</td>
	</tr>
 	<tr valign="top">
		<td class="label">{fieldLabel name="wordpress_db_user_pass" key="plugins.auth.bpnextocs.settings.saslprop"}</td>
		<td class="value">
			<input type="text" id="saslprop" name="settings[saslprop]" value="{$settings.wordpress_db_user_pass|escape}" size="30" maxlength="255" class="textField" />
		</td>
	</tr>	
</table>
