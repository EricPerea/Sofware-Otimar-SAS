<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio</title>

    <link rel="stylesheet" href="../css/styleformularios.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
    <div class="container" id="container">
    
        <div class="form-content">
            <img class="logo" src="../Img/logo_otimar.png" alt="">
            <h1 id="title">Bienvenido</h1> <!-- Titulo formulario -->
            <h2 id="title">Ingrese usuario y contraseña</h2> <!-- Titulo formulario -->
            
            <!--action="validar.php" method="POST"-->
            <form action="../php/login.php" method="POST" id="form">
    
                <div class="input-group">
                    
                    <!-- casilla usuario-->
                    <div class="input-field" class="username" id="usuario">
                        <i class="fa-solid fa-user"></i>
                        <label for="usuario"></label>
                        <input type="text" name="usuario" id="usuario" placeholder="usuario">
                    </div>

                    <!-- casilla Contraseña-->
                    <div class="input-field" class="username" id="#contraseñaDiv">
                        <i class="fa-solid fa-lock"></i>
                        <label for="contraseña"></label>
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                    </div>
    
                </div>
                
                <!-- botón iniciar sesión  href="index.html"-->
                <div class="btn-field">
                    <button id="singUp" type="submit"  name="login">Iniciar sesión</button>
                </div>
                <!-- preguntas finales -->
                <div class="forgotpwd">
                    <label>¿Olvidaste tu contraseña?</label> <a href="#">Click aquí</a>
                </div>
                <!--<input type="submit" onclick='return enviarFormulario ();' value="Iniciar sesión"-->
    
            </form>

           
    
        </div>
    </div>
    
    <!--<script src="scriptformularios.js"></script>-->
    <script type="module" src="..js/app.js"></script>


    
</body>

</html>