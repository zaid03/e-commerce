<?php
function parseEnv($path) {
    if (!file_exists($path)) return [];
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $env = [];
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($key, $value) = explode('=', $line, 2);
        $env[trim($key)] = trim($value);
    }
    return $env;
}

$env = parseEnv(__DIR__ . '/../.env');

$host = $env['DB_HOST'] ?? 'localhost';
$dbname = $env['DB_NAME'] ?? '';
$username = $env['DB_USER'] ?? '';
$password = $env['DB_PASS'] ?? '';

$connect = mysqli_connect($host, $username, $password, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>