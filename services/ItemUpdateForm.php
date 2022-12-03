<?php

include("../../config/connection.php");

function getItemById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}