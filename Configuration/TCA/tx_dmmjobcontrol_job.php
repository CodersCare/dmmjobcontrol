<?php


return [
    'ctrl'        => [
        'title'                    => 'LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job',
        'label'                    => 'job_title',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'default_sortby'           => 'ORDER BY crdate DESC',
        'sortby'                   => 'sorting',
        'delete'                   => 'deleted',
        'searchFields'             => 'job_title, employer,employer_description, location, region, short_job_description, job_description, experience, job_requirements, job_benefits',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ],
        'iconfile'                 => 'EXT:dmmjobcontrol/Resources/Public/Icons/job.gif',
    ],
    'feInterface' => [
        'fe_admin_fieldList' => 'sys_language_uid, l18n_parent, l18n_diffsource, hidden, starttime, endtime, reference, job_title, employer, employer_description, location, region, short_job_description, job_description, experience, job_requirements, job_benefits, apply_information, salary, job_type, contract_type, sector, category, discipline, education, contact',
    ],
    "interface"   => [
        "showRecordFieldList" => "sys_language_uid,l18n_parent,l18n_diffsource,hidden,starttime,endtime,reference,job_title,employer,employer_description,location,region,short_job_description,job_description,experience,job_requirements,job_benefits,apply_information,salary,job_type,contract_type,sector,category,discipline,education,contact",
    ],
    "columns"     => [
        'sys_language_uid'      => [
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
        'l18n_parent'           => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xml:LGL.l18n_parent',
            'config'      => [
                'type'                => 'select',
                'items'               => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_dmmjobcontrol_job',
                'foreign_table_where' => 'AND tx_dmmjobcontrol_job.pid=###CURRENT_PID### AND tx_dmmjobcontrol_job.sys_language_uid IN (-1,0)',
            ],
        ],
        'l18n_diffsource'       => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden'                => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  => [
                'type'    => 'check',
                'default' => '0',
            ],
        ],
        'starttime'             => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config'  => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'default'  => '0',
                'checkbox' => '0',
            ],
        ],
        'endtime'               => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config'  => [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
                'range'    => [
                    'upper' => mktime(0, 0, 0, 12, 31, 2020),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')),
                ],
            ],
        ],
        "reference"             => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.reference",
            "config"  => [
                "type" => "input",
                "size" => "30",
            ],
        ],
        "job_title"             => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_title",
            "config"  => [
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            ],
        ],
        "employer"              => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.employer",
            "config"  => [
                "type" => "input",
                "size" => "30",
            ],
        ],
        "employer_description"  => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.employer_description",
            "config"  => [
                "type"    => "text",
                "cols"    => "30",
                "rows"    => "5",
                "wizards" => [
                    "_PADDING" => 2,
                    "RTE"      => [
                        "notNewRecords" => 1,
                        "RTEonly"       => 1,
                        "type"          => "script",
                        "title"         => "Full screen Rich Text Editing|Formatteret redigering i hele vinduet",
                        "icon"          => "wizard_rte2.gif",
                        "script"        => "wizard_rte.php",
                    ],
                ],
            ],
        ],
        "location"              => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.location",
            "config"  => [
                "type" => "input",
                "size" => "30",
            ],
        ],
        "region"                => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.region",
            "config"  => [
                "type"                => "select",
                "foreign_table"       => "tx_dmmjobcontrol_region",
                "foreign_table_where" => "AND tx_dmmjobcontrol_region.pid=###STORAGE_PID### AND tx_dmmjobcontrol_region.sys_language_uid=CAST('###REC_FIELD_sys_language_uid###' AS UNSIGNED) ORDER BY tx_dmmjobcontrol_region.uid",
                "size"                => 10,
                "minitems"            => 0,
                "maxitems"            => 100,
                "MM"                  => "tx_dmmjobcontrol_job_region_mm",
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_region",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "list"      => [
                        "type"   => "script",
                        "title"  => "List",
                        "icon"   => "list.gif",
                        "params" => [
                            "table" => "tx_dmmjobcontrol_region",
                            "pid"   => "###CURRENT_PID###",
                        ],
                        "script" => "wizard_list.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
        "short_job_description" => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.short_job_description",
            "config"  => [
                "type" => "text",
                "cols" => "30",
                "rows" => "2",
            ],
        ],
        "job_description"       => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_description",
            "config"  => [
                "type"    => "text",
                "cols"    => "30",
                "rows"    => "5",
                "wizards" => [
                    "_PADDING" => 2,
                    "RTE"      => [
                        "notNewRecords" => 1,
                        "RTEonly"       => 1,
                        "type"          => "script",
                        "title"         => "Full screen Rich Text Editing|Formatteret redigering i hele vinduet",
                        "icon"          => "wizard_rte2.gif",
                        "script"        => "wizard_rte.php",
                    ],
                ],
            ],
        ],
        "experience"            => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.experience",
            "config"  => [
                "type" => "input",
                "size" => "30",
            ],
        ],
        "job_requirements"      => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_requirements",
            "config"  => [
                "type"    => "text",
                "cols"    => "30",
                "rows"    => "5",
                "wizards" => [
                    "_PADDING" => 2,
                    "RTE"      => [
                        "notNewRecords" => 1,
                        "RTEonly"       => 1,
                        "type"          => "script",
                        "title"         => "Full screen Rich Text Editing|Formatteret redigering i hele vinduet",
                        "icon"          => "wizard_rte2.gif",
                        "script"        => "wizard_rte.php",
                    ],
                ],
            ],
        ],
        "job_benefits"          => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_benefits",
            "config"  => [
                "type"    => "text",
                "cols"    => "30",
                "rows"    => "5",
                "wizards" => [
                    "_PADDING" => 2,
                    "RTE"      => [
                        "notNewRecords" => 1,
                        "RTEonly"       => 1,
                        "type"          => "script",
                        "title"         => "Full screen Rich Text Editing|Formatteret redigering i hele vinduet",
                        "icon"          => "wizard_rte2.gif",
                        "script"        => "wizard_rte.php",
                    ],
                ],
            ],
        ],
        "apply_information"     => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.apply_information",
            "config"  => [
                "type"    => "text",
                "cols"    => "30",
                "rows"    => "5",
                "wizards" => [
                    "_PADDING" => 2,
                    "RTE"      => [
                        "notNewRecords" => 1,
                        "RTEonly"       => 1,
                        "type"          => "script",
                        "title"         => "Full screen Rich Text Editing|Formatteret redigering i hele vinduet",
                        "icon"          => "wizard_rte2.gif",
                        "script"        => "wizard_rte.php",
                    ],
                ],
            ],
        ],
        "salary"                => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.salary",
            "config"  => [
                "type" => "text",
                "cols" => "30",
                "rows" => "2",
            ],
        ],
        "job_type"              => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_type",
            "config"  => [
                "type"     => "select",
                "items"    => [
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_type.I.0", "0"],
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.job_type.I.1", "1"],
                ],
                "size"     => 1,
                "maxitems" => 1,
            ],
        ],
        "contract_type"         => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contract_type",
            "config"  => [
                "type"     => "select",
                "items"    => [
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contract_type.I.0", "0"],
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contract_type.I.1", "1"],
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contract_type.I.2", "2"],
                    ["LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contract_type.I.3", "3"],
                ],
                "size"     => 1,
                "maxitems" => 1,
            ],
        ],
        "sector"                => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.sector",
            "config"  => [
                "type"                => "select",
                "foreign_table"       => "tx_dmmjobcontrol_sector",
                "foreign_table_where" => "AND tx_dmmjobcontrol_sector.pid=###STORAGE_PID### AND tx_dmmjobcontrol_sector.sys_language_uid=CAST('###REC_FIELD_sys_language_uid###' AS UNSIGNED) ORDER BY tx_dmmjobcontrol_sector.uid",
                "size"                => 10,
                "minitems"            => 0,
                "maxitems"            => 100,
                "MM"                  => "tx_dmmjobcontrol_job_sector_mm",
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_sector",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "list"      => [
                        "type"   => "script",
                        "title"  => "List",
                        "icon"   => "list.gif",
                        "params" => [
                            "table" => "tx_dmmjobcontrol_sector",
                            "pid"   => "###CURRENT_PID###",
                        ],
                        "script" => "wizard_list.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
        "category"              => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.category",
            "config"  => [
                "type"                => "select",
                "foreign_table"       => "tx_dmmjobcontrol_category",
                "foreign_table_where" => "AND tx_dmmjobcontrol_category.pid=###STORAGE_PID### AND tx_dmmjobcontrol_category.sys_language_uid=CAST('###REC_FIELD_sys_language_uid###' AS UNSIGNED) ORDER BY tx_dmmjobcontrol_category.uid",
                "size"                => 10,
                "minitems"            => 0,
                "maxitems"            => 100,
                "MM"                  => "tx_dmmjobcontrol_job_category_mm",
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_category",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "list"      => [
                        "type"   => "script",
                        "title"  => "List",
                        "icon"   => "list.gif",
                        "params" => [
                            "table" => "tx_dmmjobcontrol_category",
                            "pid"   => "###CURRENT_PID###",
                        ],
                        "script" => "wizard_list.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
        "discipline"            => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.discipline",
            "config"  => [
                "type"                => "select",
                "foreign_table"       => "tx_dmmjobcontrol_discipline",
                "foreign_table_where" => "AND tx_dmmjobcontrol_discipline.pid=###STORAGE_PID### AND tx_dmmjobcontrol_discipline.sys_language_uid=CAST('###REC_FIELD_sys_language_uid###' AS UNSIGNED) ORDER BY tx_dmmjobcontrol_discipline.uid",
                "size"                => 10,
                "minitems"            => 0,
                "maxitems"            => 100,
                "MM"                  => "tx_dmmjobcontrol_job_discipline_mm",
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_discipline",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "list"      => [
                        "type"   => "script",
                        "title"  => "List",
                        "icon"   => "list.gif",
                        "params" => [
                            "table" => "tx_dmmjobcontrol_discipline",
                            "pid"   => "###CURRENT_PID###",
                        ],
                        "script" => "wizard_list.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
        "education"             => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.education",
            "config"  => [
                "type"                => "select",
                "foreign_table"       => "tx_dmmjobcontrol_education",
                "foreign_table_where" => "AND tx_dmmjobcontrol_education.pid=###STORAGE_PID### AND tx_dmmjobcontrol_education.sys_language_uid=CAST('###REC_FIELD_sys_language_uid###' AS UNSIGNED) ORDER BY tx_dmmjobcontrol_education.uid",
                "size"                => 10,
                "minitems"            => 0,
                "maxitems"            => 100,
                "MM"                  => "tx_dmmjobcontrol_job_education_mm",
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_education",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "list"      => [
                        "type"   => "script",
                        "title"  => "List",
                        "icon"   => "list.gif",
                        "params" => [
                            "table" => "tx_dmmjobcontrol_education",
                            "pid"   => "###CURRENT_PID###",
                        ],
                        "script" => "wizard_list.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
        "contact"               => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_job.contact",
            "config"  => [
                "type"                => "select",
                "items"               => [
                    ["", 0],
                ],
                "foreign_table"       => "tx_dmmjobcontrol_contact",
                "foreign_table_where" => "AND tx_dmmjobcontrol_contact.pid=###STORAGE_PID### ORDER BY tx_dmmjobcontrol_contact.uid",
                "size"                => 1,
                "minitems"            => 0,
                "maxitems"            => 1,
                "wizards"             => [
                    "_PADDING"  => 2,
                    "_VERTICAL" => 1,
                    "add"       => [
                        "type"   => "script",
                        "title"  => "Create new record",
                        "icon"   => "add.gif",
                        "params" => [
                            "table"    => "tx_dmmjobcontrol_contact",
                            "pid"      => "###CURRENT_PID###",
                            "setValue" => "prepend",
                        ],
                        "script" => "wizard_add.php",
                    ],
                    "edit"      => [
                        "type"                     => "popup",
                        "title"                    => "Edit",
                        "script"                   => "wizard_edit.php",
                        "popup_onlyOpenIfSelected" => 1,
                        "icon"                     => "edit2.gif",
                        "JSopenParams"             => "height=350,width=580,status=0,menubar=0,scrollbars=1",
                    ],
                ],
            ],
        ],
    ],
    "types"       => [
        "0" => ["showitem" => "sys_language_uid;;;;1-1-1, l18n_parent, l18n_diffsource, hidden;;1, reference, job_title, employer, employer_description;;;richtext[paste|bold|italic|underline|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts], location, region, short_job_description, job_description;;;richtext[paste|bold|italic|underline|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts], experience, job_requirements;;;richtext[paste|bold|italic|underline|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts], job_benefits;;;richtext[paste|bold|italic|underline|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts], apply_information;;;richtext[paste|bold|italic|underline|formatblock|class|left|center|right|orderedlist|unorderedlist|outdent|indent|link|image]:rte_transform[mode=ts], salary, job_type, contract_type, sector, category, discipline, education, contact"],
    ],
    "palettes"    => [
        "1" => ["showitem" => "starttime, endtime"],
    ],
];

