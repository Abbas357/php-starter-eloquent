<?php
namespace App;
require_once __DIR__ . '/../vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
ob_start();
require 'database/connection.php';
global $pdo;

$capsule = new Capsule;

$capsule->addConnection(require 'database/conn.php');

$capsule->setAsGlobal();
$capsule->bootEloquent();

if (!isset($_SESSION)) {
    session_start();
}
if (config('app.debug') === 'true') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/../error.log');
}