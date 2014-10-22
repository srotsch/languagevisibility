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

/**
 * Class FieldUtility
 *
 * @package AOE\Languagevisibility\Utility
 */
class FieldUtility {

	/**
	 * Add inheritance flag to addRootlineFields
	 *
	 * @return void
	 */
	public static function extendRootlineFields() {
		$rootlineFields = &$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'];
		$newRootlineFields = 'tx_languagevisibility_inheritanceflag_original, tx_languagevisibility_inheritanceflag_overlayed';
		$rootlineFields .= (empty($rootlineFields))? $newRootlineFields : ',' . $newRootlineFields;
	}

	/**
	 * Add inheritance flag to pageOverlayFields
	 *
	 * @return void
	 */
	public static function extendPageOverlayFields() {
		$pagesOverlayFields = &$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'];
		$newPagesOverlayFields = 'tx_languagevisibility_inheritanceflag_overlayed';
		$pagesOverlayFields .= (empty($pagesOverlayFields)) ? $newPagesOverlayFields : ',' . $newPagesOverlayFields;
	}
}
