<?php

function getConnection()
{
    $user = 'root';
    $pass = 'root';
    $host = 'localhost';
    $port = 3306;
    $dbName = 'shopDB';
    
    $conn = mysqli_connect($host, $user, $pass, $dbName, $port) or die('connection failed');
    return $conn;
}