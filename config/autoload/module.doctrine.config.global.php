<?php
return array(
    'doctrine' => array(
        'eventmanager' => array(
            'orm_default' => array(
                'subscribers' => array(
                    'ptgbase_doctrine_descriminatorlistener'
                )
            )
        ),
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => '', //SET
                    'password' => '', //SET
                    'dbname' => '' //SET
                )
            )
        ),
    )
);
