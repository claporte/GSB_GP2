<?php
// This file generated by Propel 1.6.7 convert-conf target
// from XML runtime conf file /var/www/SLAM4-AC5/modele/Propel/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'Propel' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=S4A4_2',
        'user' => 'root',
        'password' => 'root',
        'settings' => 
        array (
          'charset' => 
          array (
            'value' => 'utf8',
          ),
        ),
        'options' => 
        array (
          'MYSQL_ATTR_INIT_COMMAND' => 
          array (
            'value' => 'SET NAMES utf8 COLLATE utf8_unicode_ci',
          ),
        ),
      ),
    ),
    'default' => 'Propel',
  ),
  'generator_version' => '1.6.7',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-Propel-conf.php');
return $conf;