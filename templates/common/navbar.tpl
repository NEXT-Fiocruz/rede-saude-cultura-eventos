{**
 * navbar.tpl
 *
 * Copyright (c) 2000-2012 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Navigation Bar
 *
 *}
<div id="navbar">
  <ul class="menu main-menu">
    <li class="home"><a href="{url context=$homeContext op="index"}">{translate key="navigation.home"}</a></li>
    <li class="main-menu-about"><a href="{url page="about"}">{translate key="navigation.about"}</a></li>
    {if $isUserLoggedIn}
      <li class="main-menu-user-page"><a href="{url conference="index" page="user"}">{translate key="navigation.userHome"}</a></li>
    {else}
      <li class="main-menu-login"><a href="{url page="login"}">{translate key="navigation.login"}</a></li>
      <li class="main-menu-user"><a href="{url page="user" op="account"}">{translate key="navigation.account"}</a></li>
    {/if}{* $isUserLoggedIn *}

    <li class="main-menu-search"><a href="{url page="search"}">{translate key="navigation.search"}</a></li>

    {foreach from=$navMenuItems item=navItem}
      {if $navItem.url != '' && $navItem.name != ''}
        <li class="main-menu-nav-item"><a href="{if $navItem.isAbsolute}{$navItem.url|escape}{else}{$navItem.url|escape}{/if}">{if $navItem.isLiteral}{$navItem.name|escape}{else}{translate key=$navItem.name}{/if}</a></li>
      {/if}
    {/foreach}

    {if $currentConference}
      {if $currentSchedConfsExist}<li class="main-menu-shendconf-current"><a href="{url schedConf="index" page="schedConfs" op="current"}">{translate key="navigation.current"}</a></li>{/if}
      {if $archivedSchedConfsExist}<li class="main-menu-shendconfs-archived"><a href="{url schedConf="index" page="schedConfs" op="archive"}">{translate key="navigation.archive"}</a></li>{/if}
      {if $enableAnnouncements}
        <li class="main-menu-announcements"><a href="{url page="announcement"}">{translate key="announcement.announcements"}</a></li>
      {/if}{* $enableAnnouncements *}

      {call_hook name="Templates::Common::Header::Navbar::CurrentConference"}
    {/if}{* $currentConference *}
    
    <li class="link-rede-saude-cultura"><a href="http://www.next.icict.fiocruz.br/sec/">Rede Saúde e Cultura</a></li>
    
  </ul>
</div>
