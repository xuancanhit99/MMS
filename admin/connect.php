<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mmsdb';
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Connection Fail: " . mysqli_connect_error());
}
?>