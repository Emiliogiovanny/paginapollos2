<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario_bd = "root";
$contrasena_bd = "";
$nombre_bd = "bd_pollos";


// Conectar a la base de datos
$conn = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd, 3306);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuario = $_POST['usuario'];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM usuarios where correo_electronico='$usuario' ";

$resultado = $conn->query($sql);
// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    header("Location: index.php?correoExiste=S");
    $conn->close();
    exit; // Asegúrate de salir del script después de redirigir
} 

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];

$sql = "INSERT INTO usuarios (nombre, apellido_paterno, correo_electronico, contrasena, apellido_materno)".
" VALUES ('$nombre', '$apellidoPaterno', '$usuario', '$contrasena', '$apellidoMaterno')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado exitosamente";
    header("Location: index.php?Registrado=$usuario");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
