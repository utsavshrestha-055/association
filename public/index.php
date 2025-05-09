<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check for maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the Laravel application
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the incoming request
$response = $app->handle(Request::capture());

// Send the response back to the browser
$response->send();

// Ensure proper closure of the application
$app->terminate(Request::capture(), $response);
