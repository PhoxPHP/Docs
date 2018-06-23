<?php
##########################################
# application database configuration file.
##########################################

return [
	##############################
	# Sets migration files storage
	##############################
	'migrations_storage' => publicDir('migrations'),

	##########################
	# Sets seeds files storage
	##########################
	'seeds_storage' => publicDir('seeds'),

	'mysql' => [
		'provider' => Kit\Glider\Platform\Mysqli\MysqliProvider::class,
		'host' => 'localhost',
		'alias' => 'mysqli',
		'username' => 'root',
		'password' => 'root',
		'database' => 'test',
		'charset' => 'utf8',
		'collation' => '',
		'domain' => ['localhost'],
		'auto_commit' => false,
		'prefix' => '',
		'alt' => null
	],
	'default' => [
		'provider' => Kit\Glider\Platform\Pdo\PdoProvider::class,
		'host' => 'localhost',
		'alias' => 'pdo',
		'username' => 'phoxphpc_admin',
		'password' => 'xS_U}KNH-UWl',
		'database' => 'phoxphpc_docs_db',
		'charset' => 'utf8',
		'collation' => 'utf8',
		'domain' => ['localhost', 'phoxphp.com'],
		'prefix' => '',
		'auto_commit' => true,
		'alt' => null,
		'persistent' => true,
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_CASE => PDO::CASE_NATURAL,
			PDO::ATTR_PERSISTENT => true
		]
	]
];