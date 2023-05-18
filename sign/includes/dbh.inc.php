<?php
session_start();

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'signdb';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
