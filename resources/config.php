<?php  

ob_start();

session_start();

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('TEMPLATE_FRONT') ? null : define('TEMPLATE_FRONT', __DIR__ . DS . 'templates/front');

// Universal variables
$company = "Prismiq";

// Localhost settings
$path = '/projects/prismiq/public/';


defined('DB_HOST') ? null : define('DB_HOST', 'localhost');

defined('DB_USER') ? null : define('DB_USER', 'root');

defined('DB_PASS') ? null : define('DB_PASS', '');

defined('DB_NAME') ? null : define('DB_NAME', 'prismiq');


// Database connections
$link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$link->set_charset("utf8mb4");

//Check connection
if ($link -> connect_errno) {
	echo 'Failed to connect to Database because: ' . $link->connect_errno;
	exit();
}


?>