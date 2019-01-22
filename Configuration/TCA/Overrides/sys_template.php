<?php
/**
 * Created by PhpStorm.
 * User: info
 * Date: 03.11.2018
 * Time: 14:27
 */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('dmmjobcontrol', 'Configuration/TypoScript/', 'JobControl');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'Classes/View/JobControl.php', '_pi1',
    'list_type', 0);
