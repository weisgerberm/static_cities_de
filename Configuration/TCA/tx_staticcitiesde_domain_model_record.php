<?php

use Weisgerber\DarfIchMit\Utility\TcaUtility;
use Weisgerber\StaticCitiesDe\Domain\Model\Record;

return [
    'ctrl' => TcaUtility::getController(Record::TABLE_NAME, 'static_cities_de',[
        'label' => 'zip',
        'searchFields' => 'zip, city',
        'default_sortby' => '',
    ],false,false),
    'types' => [
        '1' => ['showitem' => 'zip, city, state, community, latitude, longitude, email, website, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => \nn\t3::TCA()->createConfig(
        Record::TABLE_NAME,
        ['hidden'],
        [
            'zip' => [
                'exclude' => true,
                'label' => TcaUtility::title('zip'),
                'config' => TcaUtility::getInput(true),
            ],
            'city' => [
                'exclude' => true,
                'label' => TcaUtility::title('city'),
                'config' => TcaUtility::getInput(true),
            ],
            'state' => [
                'exclude' => true,
                'label' => TcaUtility::title('state'),
                'config' => TcaUtility::getInput(),
            ],
            'community' => [
                'exclude' => true,
                'label' => TcaUtility::title('community'),
                'config' => TcaUtility::getInput(),
            ],
            'latitude' => [
                'exclude' => true,
                'label' => TcaUtility::title('latitude'),
                'config' => TcaUtility::getInput(true),
            ],
            'longitude' => [
                'exclude' => true,
                'label' => TcaUtility::title('longitude'),
                'config' => TcaUtility::getInput(true),
            ],
            'email' => [
                'exclude' => true,
                'label' => TcaUtility::title('email'),
                'config' => TcaUtility::getLink(['email']),
            ],
            'website' => [
                'exclude' => true,
                'label' => TcaUtility::title('website'),
                'config' => TcaUtility::getLink(['url']),
            ],

        ]
    ),
];
