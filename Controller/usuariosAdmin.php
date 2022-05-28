<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "Conexion.php");

//crear función
function getAllUsuarios2()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "SELECT * FROM usuarios";
    $result = $db->query($queryUsuarios);
    return $result;
}

//Con el punto se concatena
function getOneUsuario2($id_usuario)
{
    $db = Conexion::getConnection();
    $queryUsuario = "SELECT * FROM usuarios WHERE id_usuario=" . $id_usuario;
    $result = $db->query($queryUsuario);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}

//crear función
function updateOneUsuario2($id_usuario, $usuario, $contraseña)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "UPDATE usuarios SET usuario ='$usuario', contraseña ='$contraseña' WHERE id_usuario=" . $id_usuario;
    $db->query($queryUsuarios);
}
//crear función
function deleteOneUsuario2($id_usuario)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "DELETE FROM usuarios WHERE id_usuario=" . $id_usuario;
    //echo $queryUsuarios;
    $db->query($queryUsuarios);
}
if (isset($_GET["elimina"]) && isset($_GET["id_usuario"])) {
    deleteOneUsuario2($_GET["id_usuario"]);
    header("Location:".VIEWS_PATH."gestion_usuarios.php");
}
if (isset($_POST['actualiza_usuario'])) {
    updateOneUsuario2($_POST["id_usuario"], $_POST["usuario"], $_POST["contraseña"]);
    header("Location:".VIEWS_PATH."gestion_usuarios.php");
}

function newUsuario2($usuario, $contraseña)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
    //echo $queryUsuarios;
    $db->query($queryUsuarios);
}

if (isset($_POST['nuevo_usuario'])) {
    newUsuario2($_POST["usuario"], $_POST["contraseña"]);
    header("Location:".VIEWS_PATH."gestion_usuarios.php");
}
