{**
 * footer.tpl
 *
 * Copyright (c) 2012 Alberto Souza
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
{if $displayCreativeCommons}
{translate key="common.ccLicense"}
{/if}
{if $pageFooter}
<br /><br />
{$pageFooter}
{/if}
{call_hook name="Templates::Common::Footer::PageFooter"}
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->

{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}

{include file="common/footer-content.tpl"}

</div><!-- container -->

</body>
</html>
