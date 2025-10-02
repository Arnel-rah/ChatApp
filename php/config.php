<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$hostname = $_ENV['DB_HOST'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$dbname   = $_ENV['DB_NAME'];

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    error_log("Database connection error: " . mysqli_connect_error());
    die("Internal server error"); 
}
?>
