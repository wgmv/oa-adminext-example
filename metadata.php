<?php

/**
 * Metadata version
 */


use wgmv\AdminExtensionExample\Controller\Admin\OaAdminExtExampleController;
use wgmv\AdminExtensionExample\Controller\Admin\OaAdminExtExampleList;

$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oaadminextexample',
    'title' => [
        'de' => 'Admin extension - test',
        'en' => 'Admin extension - test',
    ],
    'description' => [
        'de' => 'Das Modul testet die admin Erweiterung',
        'en' => 'This module tests the admin extension',
    ],
    'thumbnail' => '',
    'version' => '1.0',
    'author' => 'wgmv',
    'url' => '',
    'email' => '',
    'extend' => [

    ],
    'controllers' => [
        'oaadminext_example_calc' => OaAdminExtExampleController::class,
        'oaadminext_example_calc_list' => OaAdminExtExampleList::class
    ],
    'templates' => [
        'oaadminext_test_calc.tpl' => 'wgmv/AdminExtensionExample/views/admin/tpl/oaadminext_test_calc.tpl',
        'oaadminext_test_calc_list.tpl' => 'wgmv/AdminExtensionExample/views/admin/tpl/oaadminext_test_calc_list.tpl',
    ],
    'blocks' => [
        [
            'template' => '',
            'block' => '',
            'file' => '',
        ],
    ],
    'settings' => [
//        [
//            'group' => '',
//            'name' => '',
//            'type' => '',
//            'value' => ,
//        ],

    ],
    'events' => [
    ],
];
