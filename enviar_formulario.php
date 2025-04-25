<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Incluir el archivo de conexión a la base de datos
require_once 'conection.php';


if ($conn) {
    echo "Conexión a la base de datos exitosa.";
} else {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
}


// Verificar si se han enviado datos por el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO tu_tabla (nombre, correo, mensaje) VALUES (?, ?, ?)";

    // Crear una sentencia preparada para evitar inyecciones SQL
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros a la sentencia preparada
    $stmt->bind_param("sss", $nombre, $correo, $mensaje);

    // Ejecutar la sentencia preparada
    if ($stmt->execute()) {
        // Si la inserción fue exitosa, mostrar un mensaje de éxito
        echo "¡Mensaje enviado correctamente!";
        // O puedes redirigir al usuario a una página de agradecimiento:
        // header("Location: gracias.html");
        exit();
    } else {
        // Si hubo un error en la inserción, mostrar un mensaje de error
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
        echo "Error: " . $stmt->error;
    }

    // Cerrar la sentencia preparada
    $stmt->close();
} else {
    // Si se intenta acceder a este archivo sin enviar el formulario por POST
    echo "Acceso no permitido.";
}

// Cerrar la conexión a la base de datos
$conn->close();

?>