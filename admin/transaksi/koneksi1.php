<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'final_project';

$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die('Koneksi gagal: ' . $connection->connect_error);
}
?>