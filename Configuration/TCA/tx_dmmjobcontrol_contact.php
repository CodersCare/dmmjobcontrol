<?php
return [
    "ctrl"        => [
        'title'          => 'LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact',
        'label'          => 'name',
        'tstamp'         => 'tstamp',
        'crdate'         => 'crdate',
        'searchfield'    => 'name',
        'cruser_id'      => 'cruser_id',
        'default_sortby' => "ORDER BY name",
        'sortby'         => 'sorting',
        'iconfile'       => 'EXT:dmmjobcontrol/Resources/Public/Icons/contact.gif',
    ],
    "feInterface" => [
        "fe_admin_fieldList" => "name, address, phone, email",
    ],
    "interface"   => [
        "showRecordFieldList" => "name,address,phone,email",
    ],
    "columns"     => [
        "name"    => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.name",
            "config"  => [
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            ],
        ],
        "address" => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.address",
            "config"  => [
                "type" => "text",
                "cols" => "30",
                "rows" => "2",
            ],
        ],
        "phone"   => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.phone",
            "config"  => [
                "type" => "input",
                "size" => "30",
            ],
        ],
        "email"   => [
            "exclude" => 1,
            "label"   => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.email",
            "config"  => [
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            ],
        ],
    ],
    "types"       => [
        "0" => ["showitem" => "name;;;;1-1-1, address, phone, email"],
    ],
    "palettes"    => [
        "1" => ["showitem" => ""],
    ],
];

