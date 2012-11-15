<?php

/**
 * @defgroup plugins_auth_wordpress
 */
 
/**
 * @file plugins/generic/bp-next-ocs/index.php
 *
 * Copyright (c) 2012 Alberto Souza
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_wordpress
 * @brief Wrapper for loading the bp-next-ocs authentiation plugin.
 *
 */

// $Id$

require_once('BPNextOCSAuthPlugin.inc.php');

return new BPNextOCSAuthPlugin();

?>
