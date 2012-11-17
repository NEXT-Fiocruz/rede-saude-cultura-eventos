{**
 * site.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * This template is for the site index, which is displayed when neither
 * a conference nor an scheduled conference are specified.
 *
 * $Id$
 *}
{strip}
{if $siteTitle}
	{assign var="pageTitleTranslated" value=$siteTitle}
{/if}
{include file="common/header.tpl"}
{/strip}

{if $intro}{$intro|nl2br}{/if}

{iterate from=conferences item=conference}
<div class="portal-home-conference">
  
  <h3>{$conference->getConferenceTitle()|escape}</h3>
  
  {if $conference->getLocalizedSetting('description') != ''}
  <p>{$conference->getLocalizedSetting('description')|nl2br}</p>
  {/if}
  
  <p>
  
  <a href="{url conference=$conference->getPath() schedConf=""}" class="action">{translate key="site.conferenceView"}</a></p>

</div>
{/iterate}

{include file="common/footer.tpl"}
