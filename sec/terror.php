<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "comentarios_terror.php");
?>

<body style="background-color: rgb(0, 0, 0)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 mt-4">
                        <h4 class="" id="titulo" style="color:rgb(141, 62, 245)" , style="float:center;">Inicio -> Terror</h4>
                    </div>
                    <div class="feedback-slider-item">
                        <h1 style='text-align:center'>TERROR</h1>
                        <br></br>
                        <div class="row">
                            <div class="col-md-3">
                                <img style='text-align:center' class="d-block w-100" alt="El joker quiere que te unas" src="../img/joker.jpg" />
                            </div>
                            <div class="col-md-6">
                                <img style='text-align:center' class="d-block w-100" alt="Fullgamer quiere que te unas con terror" src="../img/marvelous.jpg" />
                                <br></br>
                            </div>
                            <div class="col-md-3">
                                <img style='text-align:center' class="d-block w-100" alt="Batman quiere que te unas" src="../img/batman.jfif" />
                            </div>
                        </div>
                        <h1 style='text-align:center; color:bisque'>TOP DE JUEGOS DE TERROR</h1>
                        <br></br>
                    </div>
                    <br></br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color: rgb(211, 185, 99);">
                                    <h3 class="card-header"> Alien Isolation</h3>
                                    <img src="../img/alien.jpeg" class="d-block user-select-none" width="100%" height="200" alt="Alien Isolation" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Alien Isolation no s??lo es un juego magn??fico que ya deber??as haber probado,
                                            el retorno de los bichos de Giger (o mejor dicho, el bicho) poco tiene que ver con los desvar??os
                                            de Prometheus y es una obra maestra que maneja la tensi??n y el miedo ante la muerte de una forma
                                            tan bestial que conseguir?? hac??rtelas pasar canutas durante toda la noche.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 06/10/2014
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://www.sega.com/games/alien-isolation%E2%84%A2">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#0f1636;">
                                    <h3 class="card-header"> Amnesia</h3>
                                    <img src="../img/amnesia.jpg" class="d-block user-select-none" width="100%" height="200" alt="Amnesia" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Hay algo que da m??s miedo que encontrarte con un peligro de frente,
                                            y es saber que est?? constantemente acech??ndote y nunca aparece ante tus ojos. Si hay
                                            algo que domina la saga Amnesia es esa sensaci??n de terror orquestada a base de cambios
                                            de m??sica, puertas que se cierran solas y silencios inc??modos.El juego de Amnesia: The Dark Descent.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 10/09/2013
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://store.epicgames.com/es-MX/p/amnesia-a-machine-for-pigs">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#b10606;">
                                    <h3 class="card-header"> Dead by Daylight</h3>
                                    <img src="../img/deadDay.jpg" class="d-block user-select-none" width="100%" height="200" alt="Dead by Daylight" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Lo malo de enfrentarte a juegos en los que el terror est?? apoyado por
                                            un gui??n y una IA es que tarde o temprano acabar??s cogi??ndole el truco a sus giros de miedo,
                                            Aqu?? el susto vendr?? de la mano de un asesino controlado por ti u otro jugador, as?? que verlas
                                            venir en Dead by Daylight no ser?? nunca una opci??n.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 14/06/2016
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://store.epicgames.com/es-ES/p/dead-by-daylight">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mb-3" style="background-color:#2a7023;">
                                    <h3 class="card-header"> FiveNight???s Freddy's </h3>
                                    <img src="../img/Five.jpg" class="d-block user-select-none" width="100%" height="200" alt="Five Night???s at Freddy's " aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                    <div class="card-body">
                                        <p class="card-text">Puede que la explotaci??n de la gallina de los huevos de oro en la que se ha
                                            convertido la franquicia le haya restado algo de fuerza a la idea, pero no olvidemos que si
                                            sigue ah?? cosechando buenas cr??ticas y cifras de ventas es porque sigue acojon??ndonos a base de
                                            bien. Con este la saga entrega un recopilatorio magn??ficos momentos.</p>
                                    </div>

                                    <div class="card-footer">
                                        Fecha de Lanzamiento: 04/12/2017
                                    </div>

                                    <div class="card-footer">

                                        <body>
                                            <form style='text-align:center'>
                                                <a href="https://fnafar.com/">
                                                    <input type="button" value="MAS..">
                                                </a>
                                            </form>
                                        </body>
                                    </div>

                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card mb-3" style="background-color:#b10606;">
                                            <h3 class="card-header">Outlast 2</h3>
                                            <img src="../img/Outlast 2.jpg" class="d-block user-select-none" width="100%" height="200" alt="Outlast 2" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                            <div class="card-body">
                                                <p class="card-text">Seguro que m??s de una vez te has cabreado al ver una pel??cula porque
                                                    el protagonista bajaba al s??tano o sal??a de un escondite donde deber??a haberse quedado
                                                    hasta que saliesen las letras de cr??ditos. Pues bien, aqu?? el protagonista vas a ser t??,
                                                    y te aseguro que en m??s de una ocasi??n vas querer hacer eso mismo para intentar evitar
                                                    que otro susto m??s te obligue a ponerte a ver dibujos animados antes de ir a dormir. </p>
                                            </div>

                                            <div class="card-footer">
                                                Fecha de Lanzamiento: 24/04/2017
                                            </div>

                                            <div class="card-footer">

                                                <body>
                                                    <form style='text-align:center'>
                                                        <a href="https://redbarrelsgames.com/games/outlast-2/">
                                                            <input type="button" value="MAS..">
                                                        </a>
                                                    </form>
                                                </body>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-3" style="background-color:#2a7023;">
                                            <h3 class="card-header">Phasmophobia</h3>
                                            <img src="../img/Phasmophobia.jpg" class="d-block user-select-none" width="100%" height="200" alt="Phasmophobia" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                            <div class="card-body">
                                                <p class="card-text"> Phasmophobia es un juego en cooperativo para cuatro con una propuesta
                                                    verdaderamente terror??fica. La actividad paranormal est?? subiendo en distintos lugares y t??
                                                    y tu equipo deber??is ir a investigar y recopilar pruebas sobre la existencia de fantasmas.
                                                    Miedo asegurado. El juego cont?? con un acceso anticipado a trav??s de Steam para los equipos
                                                    de Microsoft Windows en septiembre de 2020.</p>
                                            </div>

                                            <div class="card-footer">
                                                Fecha de Lanzamiento: 18/09/2020
                                            </div>

                                            <div class="card-footer">

                                                <body>
                                                    <form style='text-align:center'>
                                                        <a href="https://kineticgames.co.uk/">
                                                            <input type="button" value="MAS..">
                                                        </a>
                                                    </form>
                                                </body>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-3" style="background-color:#0f1636;">
                                            <h3 class="card-header">Silent Hill</h3>
                                            <img src="../img/Silent Hill.jpg" class="d-block user-select-none" width="100%" height="200" alt="Silent Hill " aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                            <div class="card-body">
                                                <p class="card-text">Si tuviste la suerte de descargar la demo en su d??a, a??n debe andar rondando
                                                    por tu biblioteca esperando a que vuelvas a disfrutarla una vez m??s. Si no, lo que podr??a haber
                                                    sido el Silent Hill de Kojima es la excusa perfecta para que os reun??is unos cuantos amigos
                                                    (que uno tenga la demo en su cuenta) y pas??is una noche de acongoje total. Franquicia de
                                                    Videojuegos.</p>
                                            </div>

                                            <div class="card-footer">
                                                Fecha de Lanzamiento: 31/01/1999
                                            </div>

                                            <div class="card-footer">

                                                <body>
                                                    <form style='text-align:center'>
                                                        <a href="https://vandal.elespanol.com/sagas/silent-hill">
                                                            <input type="button" value="MAS..">
                                                        </a>
                                                    </form>
                                                </body>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card mb-3" style="background-color:rgb(211, 185, 99);">
                                            <h3 class="card-header">Siren: Blood Curse</h3>
                                            <img src="../img/Siren.jpg" class="d-block user-select-none" width="100%" height="200" alt="Siren: Blood Curse" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                                            <div class="card-body">
                                                <p class="card-text">El terror japon??s siempre tiene ese punto siniestro que nos encanta a
                                                    los fans del g??nero, y Siren: Blood Curse es una buena muestra de hasta qu?? punto se les
                                                    puede ir la pinza a los nipones con tal de acojonarnos. Juegazo de los que no se escucha
                                                    hablar todo lo que deber??a. Siren. Desarrollado por Project Siren y distribuido por Sony
                                                    Computer Entertainment, esta disponible en casi todos los dispositivos.</p>
                                            </div>

                                            <div class="card-footer">
                                                Fecha de Lanzamiento: 24/07/2008
                                            </div>

                                            <div class="card-footer">

                                                <body>
                                                    <form style='text-align:center'>
                                                        <a href="https://www.3djuegos.com/juegos/analisis/lectores/3721/0/siren-blood-curse/">
                                                            <input type="button" value="MAS..">
                                                        </a>
                                                    </form>
                                                </body>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br></br>
                    <section>
                        <br></br>
                        <h1 style='text-align:center; color:bisque'>BLOG</h1>
                        <br></br>
                        <div class="ACC">
                            <div class="row" style='text-align:center; color:bisque'>
                                <div class="feedback-slider-item">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-6">
                                                <p style='text-align:justify'>Los videojuegos survival horror, o de terror y supervivencia en idioma
                                                    espa??ol, son un subg??nero de los videojuegos de terror y de supervivencia que se centra
                                                    en el personaje y su travesia por la sobrevivencia, mientras al mismo tiempo se intenta
                                                    asustar a los jugadores con diferentes elementos del terror. Aunque el combate suele ser parte
                                                    de la jugabilidad, generalmente se hace que el jugador se sienta menos en control que en los
                                                    videojuegos de acci??n t??picos, a trav??s de municiones, salud, velocidad y visi??n limitadas,
                                                    o a trav??s de la obstrucci??n de la interacci??n del jugador con las mec??nicas del videojuego.
                                                    El jugador tambi??n tiene el reto de encontrar elementos que desbloqueen el camino hacia nuevas
                                                    ??reas y resuelvan acertijos para continuar avanzando en la trama del videojuego. </p>
                                            </div>
                                            <div class="col-md-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div background="../img/supernintendo.jpg">
            <h1 style="text-align: center; color:antiquewhite">??Y c??mo te ha parecido nuestro TOP de videojuegos?</h1>
            <BR>
            <div class="container-fluid">
                <div class="row">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-6">
                            <div id="opiniones" style="display: block">
                                <?php
                                $result = getAllComments();
                                if ($result != null) {
                                    //Vamos a recorrer la bd
                                    while ($viaje = mysqli_fetch_assoc($result)) {
                                        //Para enviar mas de un parametro se usa ?
                                ?>
                                        <div class="card" style="background-color: #001427;">
                                            <div class="card-body">
                                                <h5 class="card-title"> <?php echo $viaje["nombre"]; ?> </h5>
                                                <p><?php echo $viaje["comentario"]; ?></p>
                                            </div>
                                        </div>

                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <form method="POST" action="<?php echo CONTROLLER_PATH; ?>comentarios_terror.php">
                                    <div class="card" style="background-color: #001427;">
                                        <div class="card-body">
                                            <h5 class="card-title">Comentarios</h5>
                                            <!--Aqu?? va el formulario-->
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" style="background-color: #708D81;" id="nombre" name="nombre" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="comentario">Comentario</label>
                                                    <textarea id="comentario" name="comentario" cols="30" rows="10" style="background-color: #708D81;" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="hidden" name="nuevo_comentario">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
</body>
<?php
include(VIEWS_PATH . "footer.php");
?>