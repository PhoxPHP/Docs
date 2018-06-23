<?php
#########################################
# Base application configuration file.
#########################################

use Kit\Prop\Selector;

return [
	#########################
	# App url
	#########################
	'app_url' => Selector::set(
		$_SERVER['HTTP_HOST'],
		[
			'localhost' => 'http://localhost/phoxphp-docs/',
			'phoxphp-docs.site' => 'http://phoxphp-docs.site/',
			'phoxphp.com' => 'https://phoxphp.com/',
			'www.phoxphp.com' => 'https://www.phoxphp.com/'
		]
	),

	#########################
	# App name
	#########################
	'app_name' => '',

	#########################
	# Routes file path
	#########################
	'app_routes' => 'public/config/routes.php',

	#########################
	# Services file path
	#########################
	'app_services' => 'public/config/services.php',

	#########################
	# Default layout
	#########################
	'default_layout' => 'default',

	#########################
	# App timezone
	#########################
	'timezone' => 'Africa/Abidjan',

	################################################################
	# Set mode your application should run in.
	# Few parts of the framework reacts differently to the mode set.
	# Accepts [dev] or [production]
	################################################################
	'devMode' => Selector::set(
		$_SERVER['HTTP_HOST'],
		[
			'localhost' => 'dev',
			'phoxphp.com' => 'production',
			'www.phoxphp.com' => 'production',
			'phoxphp-docs.site' => 'dev',
			'www.phoxphp-docs.site' => 'dev'
		]
	),

	##################################
	# Message to return if the devMode
	# is set to production.
	##################################
	'production_error_message' => 'Site not available',

	#######################
	# Storage for log files
	#######################
	'log_path' => 'app/storage/log/',

	############################
	# Current software version
	############################
	'current_version' => '<span>v2.0.1</span>',

	####################################################
	# random string key used in randomString function
	####################################################
	'random_string_key' => '$.1.al10123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$!@'
];