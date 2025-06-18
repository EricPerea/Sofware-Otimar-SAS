<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/styleformularios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="form-content">
            <img class="logo" src="../Img/logo_otimar.png" alt="">
            <h1 id="title">Bienvenido</h1>
            <h2 id="title">Formulario de Registro</h2>

            <form action="../php/registro.php" method="POST" id="form">
                <div class="input-group">
                    <!-- Nombre completo -->
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Nombre completo" required>
                    </div>

                    <!-- Tipo documento -->
                    <div class="input-field">
                        <i class="fa-solid fa-id-card"></i>
                        <label for="tipo_documento">Tipo documento:</label>
                        <select name="tipo_documento" id="tipo_documento" required>
                            <option value="CC">CC</option>
                            <option value="TI">TI</option>
                            <option value="DNI">DNI</option>
                            <option value="CPF">CPF</option>
                        </select>
                    </div>

                    <!-- Número documento -->
                    <div class="input-field">
                        <i class="fa-solid fa-id-card"></i>
                        <input type="text" name="numero_doc" placeholder="Número documento" required>
                    </div>

                    <!-- Nacionalidad -->
                    <div class="input-field">
                        <i class="fa-solid fa-passport"></i>
                        <input type="text" name="nacionalidad" placeholder="Nacionalidad" required>
                    </div>

                    <!-- Celular -->
                    <div class="input-field">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <input type="text" name="celular" placeholder="Celular" required>
                    </div>

                    <!-- Email -->
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <!-- Fecha nacimiento -->
                    <div class="input-field">
                        <i class="fa-solid fa-calendar-days"></i>
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" required>
                    </div>

                    <!-- Usuario -->
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                    </div>

                    <!-- Contraseña -->
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="contraseña" placeholder="Contraseña" required>
                    </div>
                </div>

                <div class="btn-field">
                    <button id="singUp" type="submit">Registrarme</button>
                </div>
                <div class="align-center">
                    <?php
                    if (isset($_GET['mensaje'])) {
                        echo "<p style='color: green; font-weight: bold;'>" . htmlspecialchars($_GET['mensaje']) . "</p>";
                    }
                    ?>
                </div>
                <div class="forgotpwd">
                    <label>¿Olvidaste tu contraseña?</label> <a href="#">Click aquí</a>
                </div>
            </form>
        </div>
    </div>


    <script src="../Js/scriptformularios.js"></script>
</body>
</html>
