<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cassandra contact point ip(s) with multi environment
    |--------------------------------------------------------------------------
    */
    'contactpoints'      => [
        'default' => ['127.0.0.1'],
    ],

    /* cassandra port number */
    'port'               => 9042,

    /* default page size */
    'defaultPageSize'    => 25,

    /* default consistency level */
    'defaultConsistency' => \Cassandra::CONSISTENCY_ALL,

    /* default connection keyspace */
    'keyspace'           => 'general',
    
     /* default connection username */
    'username' => 'cassandra',
    
     /* default connection password */
    'password' => 'cassandra',
];