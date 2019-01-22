<?php

return array (
    'ctrl' => array (
        'title'     => 'LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_sector',
        'label'     => 'name',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'default_sortby' => 'ORDER BY name',
        'sortby' => 'sorting',
        'searchfield' => 'name',
        'iconfile'          => 'EXT:dmmjobcontrol/icon_tx_dmmjobcontrol_sector.gif',
    ),
    'feInterface' => array (
        'fe_admin_fieldList' => 'sys_language_uid, l18n_parent, l18n_diffsource, name',
    ),
    "interface" => array (
        "showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,name"
    ),
    "columns" => array (
        'sys_language_uid' => array (
            'exclude' => 1,
            'label'  => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config' => array (
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0)
                )
            )
        ),
        'l18n_parent' => array (
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => array (
                'type'  => 'select',
                'items' => array (
                    array('', 0),
                ),
                'foreign_table'       => 'tx_dmmjobcontrol_sector',
                'foreign_table_where' => 'AND tx_dmmjobcontrol_sector.pid=###CURRENT_PID### AND tx_dmmjobcontrol_sector.sys_language_uid IN (-1,0)',
            )
        ),
        'l18n_diffsource' => array (
            'config' => array (
                'type' => 'passthrough'
            )
        ),
        "name" => Array (
            "exclude" => 1,
            "label" => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_sector.name",
            "config" => Array (
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            )
        ),
    ),
    "types" => array (
        "0" => array("showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, name")
    ),
    "palettes" => array (
        "1" => array("showitem" => "")
    )
);

