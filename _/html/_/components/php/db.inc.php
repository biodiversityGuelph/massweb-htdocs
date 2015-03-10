<?php
$servername = "localhost";
$username = "root";
$password = "barcode10";

try
{
  $pdo = new PDO("mysql:host=$servername; dbname=db189691_massbase", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server. <br>' . $e->getMessage();
  include 'error.html.php';
  exit();
}