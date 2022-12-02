<?php

function getConnection()
{
    $user = 'root';
    $pass = '';
    $host = 'localhost';
    $port = 3306;
    $dbName = 'shopDB';
 
    $conn = mysqli_connect($host, $user, $pass, $dbName, $port) or die('connection failed');
    $conn->set_charset('utf8');
    return $conn;
}