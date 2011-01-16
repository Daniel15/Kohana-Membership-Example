<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => 'kohana_test',
			'username'   => 'root',
			'password'   => 'password',
			'persistent' => false,
		),
		'caching'      => FALSE,
		'profiling'    => TRUE,
	),
);