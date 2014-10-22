<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// overriding option as this is done by languagevisibility and will not work if set
$TYPO3_CONF_VARS['FE']['hidePagesIfNotTranslatedByDefault'] = 0;

\AOE\Languagevisibility\Utility\HookUtility::registerCoreHooks();
\AOE\Languagevisibility\Utility\HookUtility::registerExtensionHooks();

\AOE\Languagevisibility\Utility\FieldUtility::extendRootlineFields();
\AOE\Languagevisibility\Utility\FieldUtility::extendPageOverlayFields();

\AOE\Languagevisibility\Utility\CacheUtility::registerCacheConfiguration();
