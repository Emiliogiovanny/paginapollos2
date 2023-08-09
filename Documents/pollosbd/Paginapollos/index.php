<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

    <main>
        <?php
        if (isset($_GET['Registrado'])) { ?>
            <script>
                var mensajePHP = "<?php echo "¡Usuario " . addslashes($_GET['Registrado']) . " dado de alta!"; ?>";
                alert(mensajePHP);
                var currentUrl = window.location.href;
                // Realiza la redirección a la misma URL sin los parámetros GET
                window.location.replace(currentUrl.split('?')[0]);
            </script>
        <?php
        }

        if (isset($_GET['correoExiste'])) { ?>
            <script>
                var mensajePHP = "<?php echo "El usuario " . addslashes($_GET['Registrado']) . " ya existe."; ?>";
                alert(mensajePHP);
                var currentUrl = window.location.href;
                // Realiza la redirección a la misma URL sin los parámetros GET
                window.location.replace(currentUrl.split('?')[0]);
            </script>
        <?php
        }
        ?>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="iniciaSesion.php" class="formulario__login" method="post">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="usuario" placeholder="Correo Electronico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="registroUsuario.php" class="formulario__register" method="post">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellidoPaterno" placeholder="Apellido paterno" required>
                    <input type="text" name="apellidoMaterno" placeholder="Apellido materno" required>
                    <input type="text" name="usuario" placeholder="Correo Electronico" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>