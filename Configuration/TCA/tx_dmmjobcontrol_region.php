<?php
return [
    'ctrl'        => [
        'title'                    => 'LLL:EXT:dmmjobcontrol/Resources/Private/Language/locallang_db.xml:tx_dmmjobcontrol_region',
        'label'                    => 'name',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'searchfield'              => 'name',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'default_sortby'           => 'ORDER BY name',
        'sortby'                   => 'sorting',
        'iconfile'                 => 'EXT:dmmjobcontrol/Resources/Public/Icons/region.gif',
    ],
    'feInterface' => [
        'fe_admin_fieldList' => 'sys_language_uid, l18n_parent, l18n_diffsource, name',
    ],
    "interface"   => [
        "showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,name",
    ],
    "columns"     => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.language',
            'config'  => [
                'type'                => 'select',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xml:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xml:LGL.default_value', 0],
                ],
            ],
        ],
        'l18n_parent'      => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => [
                'type'                => 'select',
                'items'               => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_dmmjobcontrol_region',
                'foreign_table_where' => 'AND tx_dmmjobcontrol_region.pid=###CURRENT_PID### AND tx_dmmjobcontrol_region.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource'  => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        "name"             => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/Resources/Private/Language/locallang_db.xml:tx_dmmjobcontrol_region.name",
            "config"  => [
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            ],
        ],
    ],
    "types"       => [
        "0" => ["showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, name"],
    ],
    "palettes"    => [
        "1" => ["showitem" => ""],
    ],
];