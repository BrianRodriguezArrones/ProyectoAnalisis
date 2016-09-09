<?php

require_once 'messages.php';

define( 'BASE_PATH', 'localhost');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'Randall');
define( 'DB_PASSWORD', 'rv65RV43');
define( 'DB_NAME', 'u142669696_bd');

function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}