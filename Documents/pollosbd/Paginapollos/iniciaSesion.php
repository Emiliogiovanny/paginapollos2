<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario_bd = "root";
$contrasena_bd = "";
$nombre_bd = "bd_pollos";

// Conectar a la base de datos
$conn = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd, 3306);
//echo $conn->host_info . "\n";
//echo "1";
// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios where correo_electronico='$usuario' AND contrasena='$contrasena' ";

$resultado = $conn->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    echo "Inicio de sesión exitoso. ¡Bienvenido ".$row['nombre']."!";
    header("Location: menu2.html");
    //exit; // Asegúrate de salir del script después de redirigir
} else {
    echo "Inicio de sesión fallido. Usuario o contraseña incorrectos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
