<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

// $db['default'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'localhost',
// 	'username' => 'root',
// 	'password' => '',
// 	'database' => 'demo',
// 	'dbdriver' => 'mysqli',
// 	'dbprefix' => '',
// 	'pconnect' => TRUE,
// 	'db_debug' => TRUE,
// 	'cache_on' => TRUE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'us-cdbr-east-03.cleardb.com',
	'username' => 'bce1a0d7717c7a',
	'password' => '6794620a',
	'database' => 'heroku_b2633f162d52a69',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => TRUE,
	'db_debug' => TRUE,
	'cache_on' => TRUE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);