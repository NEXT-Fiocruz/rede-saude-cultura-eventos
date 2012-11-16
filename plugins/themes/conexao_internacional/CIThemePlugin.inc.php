<?php

/**
 * @file DesertThemePlugin.inc.php
 *
 * Copyright (c) 2012 Alberto Souza, Anne camille
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CSecThemePlugin
 * @ingroup plugins_themes_tema_csec
 *
 * @brief "tema_csec" theme plugin
 */

//$Id$

import('classes.plugins.ThemePlugin');

class CIThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'CIThemePlugin';
	}

	function getDisplayName() {
		return '1ª Conexão Internacional de Saúde e (Ciber) Cultura';
	}

	function getDescription() {
		return '1ª Conexão Internacional de Saúde e (Ciber) Cultura layout';
	}

	function getStylesheetFilename() {
		return 'styles.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}

}


?>
