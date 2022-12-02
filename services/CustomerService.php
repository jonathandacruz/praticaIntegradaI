<?php

include("../../config/connection.php");

function getResults() {
    return getConnection()->query("SELECT * FROM customers ORDER BY name ASC");
}

function closeConnection() {
    getConnection()->close();
}

function getCustomerById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM customers WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}