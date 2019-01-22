<?php
return array (
    "ctrl" => array (
        'title'     => 'LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact',
        'label'     => 'name',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'searchfield' => 'name',
        'cruser_id' => 'cruser_id',
        'default_sortby' => "ORDER BY name",
        'sortby' => 'sorting',
        'iconfile'          => 'EXT:dmmjobcontrol/icon_tx_dmmjobcontrol_contact.gif',
    ),
    "feInterface" => array (
        "fe_admin_fieldList" => "name, address, phone, email",
    ),
    "interface" => array (
        "showRecordFieldList" => "name,address,phone,email"
    ),
    "columns" => array (
        "name" => Array (
            "exclude" => 1,
            "label" => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.name",
            "config" => Array (
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            )
        ),
        "address" => Array (
            "exclude" => 1,
            "label" => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.address",
            "config" => Array (
                "type" => "text",
                "cols" => "30",
                "rows" => "2",
            )
        ),
        "phone" => Array (
            "exclude" => 1,
            "label" => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.phone",
            "config" => Array (
                "type" => "input",
                "size" => "30",
            )
        ),
        "email" => Array (
            "exclude" => 1,
            "label" => "LLL:EXT:dmmjobcontrol/locallang_db.xml:tx_dmmjobcontrol_contact.email",
            "config" => Array (
                "type" => "input",
                "size" => "30",
                "eval" => "required",
            )
        ),
    ),
    "types" => array (
        "0" => array("showitem" => "name;;;;1-1-1, address, phone, email")
    ),
    "palettes" => array (
        "1" => array("showitem" => "")
    )
);

