<?php

include("../config/connection.php");

if (!empty($_POST['customer'])) {
    try {
        $data = $_POST['customer'];

        $dataDB = json_decode($data, true);
        
        save($dataDB);

    } catch(Exception $e) {
        return $e->getMessage();
    }
}

function getItemsDb() {
    return getConnection()->query("SELECT * FROM customers ORDER BY name ASC");
}

function save($dataDB) {

    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO customers  (`name`, `email`, `phone`, `address`, `number`, `complement`, `city`, `state`, `zipcode`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssissss', $dataDB['name'], $dataDB['email'], $dataDB['phone'], $dataDB['address'], $dataDB['number'], $dataDB['complement'], $dataDB['city'], $dataDB['state'], $dataDB['zipcode']);
    $stmt->execute();
}