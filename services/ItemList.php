<?php

include("../../config/connection.php");


function closeConnection() {
    getConnection()->close();
}


function getResults() {
    return getConnection()->query("SELECT * FROM items ORDER BY name ASC");
}
