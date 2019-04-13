<?php

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43('dmmjobcontrol', 'Classes/View/JobControl.php', '_pi1',
    'list_type', 0);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew {
        tx_dmmjobcontrol_job = 1
        tx_dmmjobcontrol_sector = 1
        tx_dmmjobcontrol_category = 1
        tx_dmmjobcontrol_discipline = 1
        tx_dmmjobcontrol_region = 1
        tx_dmmjobcontrol_education = 1
        tx_dmmjobcontrol_contact = 1
    }
');