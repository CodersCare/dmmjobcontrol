<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin([
    'LLL:EXT:dmmjobcontrol/Resources/Private/Language/locallang_db.xlf:tt_content.list_type_pi1',
    'dmmjobcontrol_pi1',
], 'list_type', 'dmmjobcontrol');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('dmmjobcontrol_pi1',
    'FILE:EXT:dmmjobcontrol/Configuration/FlexForms/plugin.xml');

