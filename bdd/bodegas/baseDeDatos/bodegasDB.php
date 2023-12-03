<?php

function getBodegas()
{
    global $db; 
    $stmt = $db->prepare("SELECT * FROM bodegas");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBodegasByName($nombre)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM bodegas WHERE nombre = :nombre");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array("nombre" => $nombre);
    $stmt -> execute($data);
    return $stmt -> fetchAll();
}

function getBodegaById($id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM bodegas WHERE id = :id");
    $stmt -> setFetchMode(PDO::FETCH_OBJ);
    $data = array("id" => $id);
    $stmt -> execute($data);
    return $stmt -> fetchObject();
}

function insertBodega($bodega)
{
    global $db;

        $stmt = $db->prepare(
            "INSERT INTO bodegas (nombre, direccion, email, telefono, contacto, fundacion, restaurante, hotel)
                VALUES (:nombre, :direccion, :email, :telefono, :contacto, :fundacion, :restaurante, :hotel)"
        );
        $stmt->execute($bodega);

}

function updateBodega($bodega)
{
    global $db;

        $stmt = $db->prepare(
            "UPDATE bodegas
             SET
                nombre = :nombre,
                direccion = :direccion,
                email = :email,
                telefono = :telefono,
                contacto = :contacto,
                fundacion = :fundacion,
                restaurante = :restaurante,
                hotel = :hotel
             WHERE id = :id"
        );
        $stmt->execute($bodega);

}

function deleteBodegaById($id)
{
    global $db;
    $data = array('id' => $id);
    $stmt = $db->prepare("DELETE FROM bodegas WHERE id = :id");
    $stmt -> execute($data);
}

function deleteAllBodegas($id)
{
    global $db;
    $stmt = $db->prepare("DELETE FROM bodegas");
    $stmt -> execute();
}


