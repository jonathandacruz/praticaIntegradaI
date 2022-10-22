<?php

$appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$user = getenv('postgres');
$pass = getenv('postgres');
$host = getenv('HOST_DB');
$port = getenv('PORT_DB');
$dbName = getenv('DATABASE');

define(CONNSTR, "host=$host port=$port dbname=$dbName user=$user password=$pass");

function getdb() {
    $conn = pg_connect(CONNSTR) or die('connection failed');
    return $conn;
}

$result = pg_query(getdb(), "SELECT * FROM pg_stat_activity");
var_dump(pg_fetch_all($result));