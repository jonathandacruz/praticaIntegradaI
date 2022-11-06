<?php

include("../config/connection.php");


function getOrdersDb() {
    return getConnection()->query("SELECT * FROM orders ORDER BY date DESC");
}