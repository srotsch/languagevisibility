<?php
namespace AOE\Languagevisibility\Utility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 AOE GmbH <dev@aoe.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class HookUtility
 *
 * @package AOE\Languagevisibility\Utility
 */
class HookUtility {

	/**
	 * Register TYPO3 core hooks
	 *
	 * @return void
	 */
	public static function registerCoreHooks() {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['languagevisibility'] =
			'tx_languagevisibility_hooks_t3lib_tcemain';

		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_page.php']['getPageOverlay']['languagevisility'] =
			'tx_languagevisibility_hooks_t3lib_page';
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_page.php']['getRecordOverlay']['languagevisility'] =
			'tx_languagevisibility_hooks_t3lib_page';

		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauthgroup.php']['checkFullLanguagesAccess']['languagevisility'] =
			'tx_languagevisibility_hooks_t3lib_userauthgroup->checkFullLanguagesAccess';

		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['settingLanguage_preProcess']['languagevisility'] =
			'tx_languagevisibility_hooks_tslib_fe->settingLanguage_preProcess';

		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck']['languagevisility'] =
			'tx_languagevisibility_hooks_alt_doc->makeEditForm_accessCheck';

		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/tslib/class.tslib_menu.php']['filterMenuPages']['languagevisility'] =
			'tx_languagevisibility_hooks_tslib_menu';
	}

	/**
	 * Register extension hooks
	 *
	 * @return void
	 */
	public static function registerExtensionHooks() {
		if (ExtensionManagementUtility::isLoaded('templavoila')) {
			$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['templavoila']['pi1']['renderElementClass']['languagevisibility'] =
				'tx_languagevisibility_hooks_templavoila_pi1';
		}
		if (ExtensionManagementUtility::isLoaded('crawler')) {
			$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['crawler']['processUrls']['languagevisibility'] =
				'tx_languagevisibility_hooks_crawler->processUrls';
		}
		if (ExtensionManagementUtility::isLoaded('phpunit')) {
			$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['phpunit']['importExtensions_additionalDatabaseFiles']['languagevisibility'] =
				'EXT:languagevisibility/ext_tables.sql';
		}
		if (ExtensionManagementUtility::isLoaded('aoe_wspreview')) {
			$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['aoe_wspreview/system/class.tx_aoewspreview_system_workspaceService.php']['createDiff']['languagevisibility'] =
				'tx_languagevisibility_hooks_aoe_wspreview->aoewspreview_createDiff';
		}

	}
}
