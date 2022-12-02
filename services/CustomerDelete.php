<?php

include("../config/connection.php");

if (!empty($_GET['id'])) {
    try {
        $id = $_GET['id'];

        delete($id);

    } catch(Exception $e) {
        return $e->getMessage();
    }
}

function delete($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM customers WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
}