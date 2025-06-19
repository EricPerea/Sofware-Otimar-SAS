<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Otimar S.A.S</title>

    <link rel="stylesheet" href="css/styleprincipal.css">
    <link rel="icon" type="image/jpg" href="Img/favicon.jpg" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/styleprincipal.css">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <header>
        <img class="logo" src="Img/logo_otimar.png" alt="">
    </header>

    <nav>
        <ul>
            <li class="nav-item"> <a href="#">Inicio</a></li>
            <li class="nav-item"> <a href="#">Reserva tu vuelo</a></li>
            <li class="nav-item"> <a href="#">Mis viajes</a></li>
            <li class="nav-item"> <a href="pages/indextarapaca.html">Blogs</a></li>
            <li class="nav-item"> <a href="pages/Bienvenida.html">Contacto</a></li>
            <li class="nav-item"> <a href="pages/Formlogin.php">Ingresa</a></li>
            <li class="nav-item"> <a href="pages/Formularioinicio.php">Registrate</a></li>
            <li class="nav-item"> <a href="pages/Formularioinicio.php">
                    <?php if (isset($_SESSION['usuario'])): ?>
                        Bienvenido, <?= htmlspecialchars($_SESSION['usuario']) ?> | <a href="php/logout.php">Cerrar sesión</a>
                    <?php else: ?>
                        <a href="pages/Formlogin.php">Iniciar sesión</a> | <a href="pages/Formularioinicio.php">Registrarse</a>
                    <?php endif; ?>
            </a></li>
        </ul>

    </nav>

    <!--Vuelos a Tarapacá,Reserva tu vuelo-->
    <div class="col s12 z-depth-2">
        <div class="card horizontal teal darken-2">
            <div class="card-image">
                <h6>
                    <img class="responsive-img"
                        src="https://www.invias.gov.co/images/Photos/2021/261021_tarapaca_03.jpg" alt="">
                </h6>
            </div>
            <div class="card-stacked"></div>
            <div class="card-content white-text">
                <span class="card-title" size="4">Vuelos a Tarapacá</span>
                <h6 class="section">
                    <p>
                        <font size="4">Embarquese en un viaje inolvidable a Tarapacá, Amazonas, Colombia, un tesoro escondido en el corazón de la selva
                        amazónica. Un lugar mágico donde la exuberancia natural se fusiona con la rica cultura indígena, creando una experiencia
                        única e inolvidable. Tarapacá es un corregimiento ubicado en el departamento de Amazonas, Colombia. Se encuentra a 100
                        metros sobre el nivel del mar y limita al norte con La Pedrera, al sur con los municipios de Leticia y Puerto Nariño, al
                        oeste con Puerto Arica y el Perú y al este con Brasil. Es un lugar de gran belleza natural y cultural, con una rica
                        historia y una población diversa.
                        </font>
                    </p>
                </h6>
                <div class="card-action">
                    <a href="#">Reserva tu vuelo</a>
                </div>
            </div>
        </div>

        <!--Destino Tarapaca-->
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/tarapaca2.jpg" alt="" width="228px" height="250px">
                        <span class="card-title">Tarapacá Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>Imagine un lugar donde el verde esmeralda de la selva se extiende hasta donde alcanza la vista, donde el canto de las
                        aves y el sonido del río Putumayo son la banda sonora de su viaje. Tarapacá está rodeado de selva amazónica, lo que lo
                        convierte en un paraíso natural sin precedentes, el lugar ideal para realizar actividades como senderismo, observación
                        de aves y pesca, es un paraíso natural sin precedentes, donde podrá conectar con la naturaleza en su estado más puro y
                        descubrir la asombrosa biodiversidad que alberga la selva amazónica.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino Tarapacá</a>
                    </div>
                </div>
            </div>

            <!--Destino La Chorrera-->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/La Chorrera Amazonas Colombia.jpg" alt="" width="238px"
                            height="250" alt="">
                        <span class="card-title">La Chorrera Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino La Chorrera</a>
                    </div>
                </div>
            </div>

            <!--Destino La Pedrera-->
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="Img/La Pedrera.jpg" alt="" width="228px" height="250" alt=""
                            srcset="">
                        <span class="card-title">La Pedrera Amazonas</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Destino La Pedrera</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Requisitos para menores-->
        <div class="row">
            <div class="col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Requisitos para menores</font>
                    </p>
                </h4>
            </div>

            <!--Requisitos de Viaje-->
            <div class="container col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Requisitos de Viaje</font>
                    </p>
                </h4>
            </div>

            <!--Políticas de equipaje-->
            <div class="container col s12 m4 orange accent-2 white-text text center-align z-depth-2">
                <h4>
                    <p>
                        <font size="6">Políticas de equipaje</font>
                    </p>
                </h4>
            </div>

        </div>

    </div>

    <footer>
        <h1>Otimar SAS</h1>
        <P>Todos los derechos reservados © 2024</P>
        <p>
        <ul>
            <li>Elaborado por:</li>
            <li>Evelyn Mercedes Rodríguez Ariza</li>
            <li>Diana Carolina Cuellar Rodríguez</li>
        </ul>
        </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>