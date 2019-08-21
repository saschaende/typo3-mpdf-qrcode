<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'mPDF QR code library',
    'description' => 'QR code generating library with HTML/PNG/mPDF output possibilities. This is based on QrCode library bundled with mPDF until v8.0, made by Laurent Minguet. It is provided under LGPL license.',
    'category' => 'tools',
    'author' => 'Filmmusic.io',
    'author_email' => 'info@filmmusic.io',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.6.0-9.9.9',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
