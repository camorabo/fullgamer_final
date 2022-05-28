<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}
if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}
if (!defined('SECTION_PATH')) {
    define('SECTION_PATH', '../sec/');
}

require_once(LIBRARIES_PATH . "Conexion.php");

//crear función
function getAllComments()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryComments = "SELECT * FROM comentarios_terror";
    $result = $db->query($queryComments);
    return $result;
}

//Con el punto se concatena
function getOneComment($id)
{
    $db = Conexion::getConnection();
    $queryComment = "SELECT * FROM comentarios_terror WHERE id=" . $id;
    $result = $db->query($queryComment);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}

//crear función
function updateOneComment($id, $nombre, $comentario)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryComments = "UPDATE comentarios_terror SET nombre ='$nombre', comentario ='$comentario' WHERE id=" . $id;
    $db->query($queryComments);
}
//crear función
function deleteOneComment($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryComments = "DELETE FROM comentarios_terror WHERE id=" . $id;
    //echo $queryComments;
    $db->query($queryComments);
}
if (isset($_GET["elimina"]) && isset($_GET["id"])) {
    deleteOneComment($_GET["id"]);
    header("Location:".SECTION_PATH."terror.php");
}
if (isset($_POST['actualiza_comentario'])) {
    updateOneComment($_POST["id"], $_POST["nombre"], $_POST["comentario"]);
    header("Location:".SECTION_PATH."terror.php");
}

function newComment($nombre, $comentario)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryComments = "INSERT INTO comentarios_terror (nombre, comentario) VALUES ('$nombre', '$comentario')";
    //echo $queryComments;
    $db->query($queryComments);
}

if (isset($_POST['nuevo_comentario'])) {
    newComment($_POST["nombre"], $_POST["comentario"]);
    header("Location:".SECTION_PATH."terror.php");
}
