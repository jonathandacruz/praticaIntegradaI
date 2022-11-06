<?php

include("../config/connection.php");

if (!empty($_POST['item'])) {

    $data = $_POST['item'];

    $item = json_decode($data, true);

    saveItemDb($item);

    var_dump($item);

}

function getItemsDb() {
    return getConnection()->query("SELECT * FROM items ORDER BY name ASC");
}

function saveItemDb($item) {

    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO items (`name`, `category`, `price`, `img_url`, `unit`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('ssdss', $item['name'], $item['category'], $item['price'], $item['img_url'], $item['unit']);
    $stmt->execute();
}