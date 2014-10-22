<?php
$extensionPath = t3lib_extMgm::extPath('languagevisibility');
$extensionClassesPath = t3lib_extMgm::extPath('languagevisibility') . 'Classes/';
return array(
	'tx_languagevisibility_abstractservices' => $extensionPath . 'class.tx_languagevisibility_abstractservices.php',
	'tx_languagevisibility_beservices' => $extensionPath . 'class.tx_languagevisibility_beservices.php',
	'tx_languagevisibility_feservices' => $extensionPath . 'class.tx_languagevisibility_feservices.php',
	'tx_languagevisibility_fieldvisibility' => $extensionPath . 'class.tx_languagevisibility_fieldvisibility.php',

	'tx_languagevisibility_cachemanager' => $extensionClassesPath . 'class.tx_languagevisibility_cacheManager.php',
	'tx_languagevisibility_celement' => $extensionClassesPath . 'class.tx_languagevisibility_celement.php',
	'tx_languagevisibility_element' => $extensionClassesPath . 'class.tx_languagevisibility_element.php',
	'tx_languagevisibility_elementfactory' => $extensionClassesPath . 'class.tx_languagevisibility_elementFactory.php',
	'tx_languagevisibility_fceelement' => $extensionClassesPath . 'class.tx_languagevisibility_fceelement.php',
	'tx_languagevisibility_fceoverlayelement' => $extensionClassesPath . 'class.tx_languagevisibility_fceoverlayelement.php',
	'tx_languagevisibility_language' => $extensionClassesPath . 'class.tx_languagevisibility_language.php',
	'tx_languagevisibility_languagerepository' => $extensionClassesPath . 'class.tx_languagevisibility_languagerepository.php',
	'tx_languagevisibility_pageelement' => $extensionClassesPath . 'class.tx_languagevisibility_pageelement.php',
	'tx_languagevisibility_recordelement' => $extensionClassesPath . 'class.tx_languagevisibility_recordelement.php',
	'tx_languagevisibility_reports_configurationstatus' => $extensionClassesPath . 'class.tx_languagevisibility_reports_ConfigurationStatus.php',
	'tx_languagevisibility_ttnewselement' => $extensionClassesPath . 'class.tx_languagevisibility_ttnewselement.php',
	'tx_languagevisibility_visibility' => $extensionClassesPath . 'class.tx_languagevisibility_visibility.php',
	'tx_languagevisibility_visibilityservice' => $extensionClassesPath . 'class.tx_languagevisibility_visibilityService.php',

	'tx_languagevisibility_daocommon' => $extensionClassesPath . 'dao/class.tx_languagevisibility_daocommon.php',
	'tx_languagevisibility_daocommon_stub' => $extensionClassesPath . 'dao/class.tx_languagevisibility_daocommon_stub.php',

	'tx_languagevisibility_invalidrowexception' => $extensionClassesPath . 'exceptions/class.tx_languagevisibility_InvalidRowException.php',

	'tx_languagevisibility_hooks_alt_doc' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_alt_doc.php',
	'tx_languagevisibility_hooks_aoe_wspreview' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_aoe_wspreview.php',
	'tx_languagevisibility_hooks_crawler' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_crawler.php',
	'tx_languagevisibility_hooks_t3lib_page' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_t3lib_page.php',
	'tx_languagevisibility_hooks_t3lib_tcemain' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_t3lib_tcemain.php',
	'tx_languagevisibility_hooks_t3lib_userauthgroup' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_t3lib_userauthgroup.php',
	'tx_languagevisibility_hooks_templavoila_pi1' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_templavoila_pi1.php',
	'tx_languagevisibility_hooks_tslib_fe' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_tslib_fe.php',
	'tx_languagevisibility_hooks_tslib_menu' => $extensionPath . 'hooks/class.tx_languagevisibility_hooks_tslib_menu.php',

	'tx_languagevisibility_modfunc1' => $extensionPath . 'modfunc1/class.tx_languagevisibility_modfunc1.php',

	'tx_languagevisibility_beuser' => $extensionPath . 'patch/lib/class.tx_languagevisibility_beUser.php',

	'tx_languagevisibility_basetestcase' => $extensionPath . 'tests/tx_languagevisibility_baseTestcase.php',
	'tx_languagevisibility_databasetestcase' => $extensionPath . 'tests/tx_languagevisibility_databaseTestcase.php',
	'tx_languagevisibility_databaseTtContentTestcase' => $extensionPath . 'tests/tx_languagevisibility_databaseTtContentTestcase.php',
	'tx_languagevisibility_tests_helper_environmenthelper' => $extensionPath . 'tests/classes/class.tx_languagevisibility_tests_helper_environmentSaver.php',
);
