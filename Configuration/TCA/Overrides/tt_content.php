<?php
/**
 * Created by PhpStorm.
 * User: info
 * Date: 03.11.2018
 * Time: 14:27
 */

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['dmmjobcontrol_pi1'] = 'layout,select_key';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['dmmjobcontrol_pi1'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin([
    'LLL:EXT:dmmjobcontrol/Resources/Private/Language/locallang_db.xml:tt_content.list_type_pi1',
    'dmmjobcontrol_pi1',
], 'list_type', 'dmmjobcontrol');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('dmmjobcontrol_pi1',
    'FILE:EXT:dmmjobcontrol/flexform_ds.xml');

