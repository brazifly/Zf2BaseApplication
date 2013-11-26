<?php
return array(
    'modules' => array(
	'DoctrineModule',
	'DoctrineORMModule',
        'ZendDeveloperTools',
	'EdpModuleLayouts',
        'ZfcBase',
        'ZfcUser',
        'ZfcUserDoctrineORM',
        'BjyAuthorize',
	'Application'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
            ),
        'config_glob_paths' => array('config/autoload/{,*.}{global,local}.php')
    )
);
