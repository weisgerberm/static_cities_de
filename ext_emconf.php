<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'static_cities_de',
    'description' => 'Static Info Table for german cities with coordinates',
    'category' => 'misc',
    'author' => 'Mark Weisgerber',
    'author_email' => 'mark.weisgerber@outlook.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
