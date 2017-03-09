<?php

$server = 'localhost';
$username= 'root';
$password = 'abcde';
$database = 'logintest141';


try
{
    $conn= new PDO("mysql:host=$server; dbname=$database",$username, $password);
}
catch(PDOException $e)
{
    die('Connection failed: ' . $e->getMessage());
}

?>
