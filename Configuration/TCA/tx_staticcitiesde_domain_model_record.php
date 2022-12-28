<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record',
        'label' => 'zip',
        'versioningWS' => false,
        'searchFields' => 'zip,city,state,community,latitude,longitude',
        'iconfile' => 'EXT:static_cities_de/Resources/Public/Icons/tx_staticcitiesde_domain_model_record.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'zip, city, state, community, latitude, longitude, email, website, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'state' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.state',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'community' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.community',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.latitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.longitude',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],
        'website' => [
            'exclude' => true,
            'label' => 'LLL:EXT:static_cities_de/Resources/Private/Language/locallang_db.xlf:tx_staticcitiesde_domain_model_record.website',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => ''
            ],
        ],

    ],
];
