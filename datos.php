<?php
if(isset($_POST['save'])) {
    
    $con = new mysqli("localhost", "usuario", "contraseña", "park_diversion");

   
    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }

    
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha_ingreso'];
    $juego = $_POST['juego_favorito'];
    $comida = $_POST['id_comida'];


    
    $sql = "INSERT INTO ingresos_park (fecha_ingreso, juego_favorito, id_comida) VALUES ('$fecha', '$juego', '$comida')";

    
    if ($con->query($sql) === TRUE) {
        echo "¡Datos guardados correctamente!";
    } else {
        echo "Error al guardar los datos: " . $con->error;
    }

    
    $con->close();
}
?>
