<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');

include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "usuariosAdmin.php");
?>

<body style="background-color:#001427">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <button style="background-color:#BF0603; color:wheat" id="espacioletra">
                            <a style="color:wheat" class="nav-link" href="home_admin.php">Regresar</a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="jumbotron">
                    <BR>
                    <h2 style = "text-align:center">
                        Gestione Usuarios
                    </h2>
                    <BR>
                    <p>
                        En esta sección se pueden agregar nuevos usuarios, modificarlos o eliminarlos.
                    </p>
                    <BR>
                    <img src="../img/Barbara-Oracle.png" class="d-block w-100" alt="El oráculo de Batman" />
                    <!-- Button trigger modal -->
                    <button style="background-color:#BF0603" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Nuevo Usuario
                    </button>

                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $result = getAllUsuarios2();
                            if ($result != null) {
                                //Vamos a recorrer la bd
                                while ($usuario = mysqli_fetch_assoc($result)) {
                                    //Para enviar mas de un parametro se usa ?
                            ?>
                                    <tr>
                                        <td><?php echo $usuario["usuario"]; ?></td>
                                        <td><?php echo $usuario["contraseña"]; ?></td>
                                        <td><?php echo $usuario["rol"]; ?></td>
                                        <td>
                                            <a href="?id_usuario=<?php echo $usuario["id_usuario"]; ?>">
                                                <img src="../img/edit.png" width="25px" style="border-radius: 100%;">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?id_usuario=<?php echo $usuario["id_usuario"]; ?>&elimina=1">
                                                <img src="../img/trash.png" width="25px" style="border-radius: 100%;">
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php

                    if (isset($_GET["id_usuario"]) && !isset($_GET["elimina"])) {
                        //echo $_GET["id_usuario"];
                        $result_one_usuario = getOneUsuario2($_GET["id_usuario"]);
                        //print_r($result_one_usuario);
                        while ($row = mysqli_fetch_assoc($result_one_usuario)) {
                            //print_r($row);
                    ?>
                            <form method="POST" action="<?php echo CONTROLLER_PATH; ?>usuariosAdmin.php">
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Nombre de usuario</label>
                                    <input type="text" value="<?php echo $row["usuario"]; ?>" class="form-control" id="usuario" name="usuario" aria-describedby="textHelp">
                                    <div id="textHelp" class="form-text">Ingrese el nombre del usuario.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="text" value="<?php echo $row["contraseña"]; ?>" class="form-control" id="contraseña" name="contraseña" aria-describedby="textHelp">
                                    <div id="textHelp" class="form-text">Ingrese la contraseña.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="rol" class="form-label">Rol</label>
                                    <input type="number" value="<?php echo $row["rol"]; ?>" class="form-control" id="rol" name="rol" aria-describedby="numberHelp">
                                    <div id="numberHelp" class="form-text">Ingrese el rol.</div>
                                </div>
                                <input type="hidden" value="<?php echo $row["id_usuario"]; ?>" name="id_usuario">
                                <input type="hidden" name="actualiza_usuario">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color:#8D0801">
                <form method="POST" action="<?php echo CONTROLLER_PATH; ?>usuariosAdmin.php">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Creación de usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nombre de usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese el nombre del usuario.</div>
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" id="contraseña" name="contraseña" aria-describedby="textHelp">
                            <div id="textHelp" class="form-text">Ingrese la contraseña.</div>
                        </div>
                        <input type="hidden" name="nuevo_usuario">
                        <button style="background-color:#001427" type="submit" class="btn btn-primary">Guardar</button>

                    </div>
                    <div class="modal-footer">
                        <button style="background-color:#001427" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include(VIEWS_PATH . "footer.php");
?>