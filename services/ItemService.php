<?php

include("../config/connection.php");

if (!empty($_POST['item'])) {
    try {
        $data = $_POST['item'];

        $item = json_decode($data, true);
        
        saveItemDb($item);

    } catch(Exception $e) {
        return $e->getMessage();
    }
}

function getItemsDb() {
    return getConnection()->query("SELECT * FROM items ORDER BY name ASC");
}

function getItemByIdDb($id) {
    $stmt = getConnection()->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function saveItemDb($item) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO items (`name`, `category`, `price`, `img_url`, `unit`, `description`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssdsss', $item['name'], $item['category'], $item['price'], $item['img_url'], $item['unit'], $item['description']);
    $stmt->execute();
}