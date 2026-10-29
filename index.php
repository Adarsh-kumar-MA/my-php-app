<?php
$host = getenv('DB_HOST') ?: 'mysql-service';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: 'secretpassword';
$dbname = getenv('DB_NAME') ?: 'app_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<h1>Hello from PHP App on Kubernetes!</h1>";
echo "<p style='color: green; font-size: 20px;'>Successfully connected to MySQL Database!</p>";
$conn->close();
?>