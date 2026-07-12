<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check for maintenance mode before doing anything else
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap the Laravel application
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Fix Laravel's public path since we're not serving from /public directly
$app->usePublicPath(__DIR__ . '/../public');

// Handle the request and send the response
$app->handleRequest(Request::capture());