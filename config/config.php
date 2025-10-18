<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'turnpagecms');

// Site Configuration
define('SITE_NAME', 'TurnpageCMS');
define('SITE_URL', 'http://localhost');

// Start Session
session_start();

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>