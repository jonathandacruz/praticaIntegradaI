<?php

include("../config/connection.php");

if (!empty($_POST['item'])) {
    try {
        $data = $_POST['item'];

        $item = json_decode($data, true);
        
        updateItemDb($item);

    } catch(Exception $e) {
        return $e->getMessage();
    }
}

function updateItemDb($item) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE items SET `name` = ?, `category` = ?, `price` = ?, `img_url` = ?, `unit` = ?, `description` = ? WHERE id = ?");
    $stmt->bind_param('ssdsssi', $item['name'], $item['category'], $item['price'], $item['img_url'], $item['unit'], $item['description'], $item['id']);
    $stmt->execute();
}