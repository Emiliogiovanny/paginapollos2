<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Estilos para el contenedor que centra el formulario */
            .contenedor-formulario {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 50vh;
                /* Altura de la ventana visible */
            }

            /* Estilos para el formulario */
            form {
                width: 350px;
                padding: 20px;
                border: 1px solid #ccc;
                background-color: #f5f5f5;
                border-radius: 5px;
            }

            .centrar-h1 {
                text-align: center;
            }
        </style>

</head>

<body>

    <?php 
        if (isset($_GET['Registrado'])){ ?>
            <script>
                var mensajePHP = "<?php echo "¡Usuario ".addslashes($_GET['Registrado'])." dado de alta!"; ?>"; 
            alert(mensajePHP  ) ;
            var currentUrl = window.location.href;
            alert(currentUrl  ) ;
// Realiza la redirección a la misma URL sin los parámetros GET
window.location.replace(currentUrl.split('?')[0]);            
             </script>
             <?php
        }

        if (isset($_GET['correoExiste'])){ ?>
            <script>
                var mensajePHP = "<?php echo "El usuario ".addslashes($_GET['Registrado'])." ya existe."; ?>"; 
            alert(mensajePHP  ) ;
            var currentUrl = window.location.href;

// Realiza la redirección a la misma URL sin los parámetros GET
window.location.replace(currentUrl.split('?')[0]);
             </script>
             <?php
        }        
    ?>

    <h1 class="centrar-h1">Alta de Usuario</h1>
    <div class="contenedor-formulario">
        <form action="registroUsuario.php" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" id="apellidoPaterno" name="apellidoPaterno" required><br><br>

            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" id="apellidoMaterno" name="apellidoMaterno" required><br><br>

            <label for="usuario">Correo Electrónico:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br><br>

            <input type="submit" value="Registrar Usuario">
        </form>


    </div><br>
    <center>
        <h2>Nota: el correo electrónico es el usuario para iniciar sesión</h2>
    </center>
</body>

</html>