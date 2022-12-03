<?php

include("../config/connection.php");

if (!empty($_POST['customer'])) {
    try {
        $data = $_POST['customer'];

        $dataDB = json_decode($data, true);
        
        update($dataDB);

    } catch(Exception $e) {
        return $e->getMessage();
    }
}

function update($dataDB) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE customers SET `email` = ?, `phone` = ?, `address` = ?, `number` = ?, `complement` = ?, `city` = ?, `state` = ?, `district` = ?,  `zipcode` = ? WHERE id = ?");
    $stmt->bind_param('sssisssssi', $dataDB['email'], $dataDB['phone'], $dataDB['address'], $dataDB['number'], $dataDB['complement'], $dataDB['city'], $dataDB['state'], $dataDB['district'], $dataDB['zipcode'], $dataDB['id']);
    $stmt->execute();
}