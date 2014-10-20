<?php
//use ZendPattern\Zsf\Server\ZendServerManager;

return array(
    'db' => array(
        'driver' => 'Pdo_Mysql',
        'database' => 'buggy_woogie',
        'username' => 'root',
        'password' => 'zend',
        'host' => 'localhost',
    ),
    'doctrine' => array(
    	'connection' => array(
    		'orm_default' => array(
    			'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
    		    'params' => array(
    		    	'host' => 'localhost',
    		        'user' => 'root',
    		        'password' => 'zend',
    		        'dbname' => 'buggy_woogie',
    		    ),
    		),
    	),
    ),
    'service_manager' => array(
    	'factories' => array(
    		'dbAdapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
    	),
    ),
    
    /*ZendServerManager::SERVERS_CONFIG_KEY => array(
	    'localhost' => array(
		    'name' => 'localhost',
		    'version' => '7.0.0',
		    'edition' => '',
		    'uriPath' => 'http://localhost:10081/',
		    'apiPath' => 'ZendServer/Api',
		    'apiKeys' => array(
		    	'admin' => '6db5ef7814663395f9a3d83fcb9d0efd31732055d758c337cb6626c53089060c',
    		),
    	),
    ),*/
);
