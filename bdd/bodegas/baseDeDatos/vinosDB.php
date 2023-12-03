<?php

function getAllByBodega($bodega)
{
    global $db; 
    $stmt = $db->prepare("SELECT * FROM vinos WHERE bodega = :bodega");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array("bodega" => $bodega);
    $stmt->execute($data);

    return $stmt->fetchAll();
}

function getVinoById($id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM vinos WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "id" => $id
    );
    $stmt->execute($data);
    return $stmt->fetchObject();
}

function insertVino($vino)
{
    global $db;

    $stmt = $db->prepare(
        "INSERT INTO vinos (nombre, bodega, descripcion, ano, tipo, alcohol)
            VALUES (:nombre, :bodega, :descripcion, :ano, :tipo, :alcohol)"
    );
    $stmt->execute($vino);

}

function deleteVinoById($id)
{
    global $db;
    $data = array('id' => $id);
    $stmt = $db->prepare("DELETE FROM vinos WHERE id = :id");
    $stmt->execute($data);
}


function deleteAllVinosByBodega($bodega)
{
    global $db;
    $data = array('bodega' => $bodega);
    $stmt = $db->prepare("DELETE FROM vinos WHERE bodega = :bodega");
    $stmt->execute($data);
}