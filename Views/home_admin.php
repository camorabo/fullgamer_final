<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>

<body style= "background-color:#001427">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <BR>
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <button style="background-color:#BF0603; color:wheat" id="espacioletra">
                            <a style="color:wheat" class="nav-link" href="gestion_usuarios.php">Gestionar Usuarios</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button style="background-color:#BF0603; color:wheat" id="espacioletra">
                            <a style="color:wheat" class="nav-link active" href="<?php echo VIEWS_PATH; ?>login.php?info=2">Cerrar sesión</a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="jumbotron">
                    <BR>
                    <h2 style="text-align:center">
                        Bienvenido Oráculo
                    </h2>
                    <BR>
                    <p>
                        <img alt="Imagen de inicio usuario o administrador" class="d-block w-75" src="<?php echo IMG_PATH; ?>supernintendo.jpg" />
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include(VIEWS_PATH . "footer.php");
?>