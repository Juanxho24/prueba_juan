<?php
require 'conexion/database.php';
$db = new Database();
$con = $db->conectar();



$validacion=0;


$nom = $_POST['nom'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$juego = $_POST['juego'];
$comida = $_POST['comida'];



$sql= $con -> prepare ("SELECT * FROM ingresos_park WHERE fecha_ingreso='$fecha'");
 $sql -> execute();
 $fila = $sql -> fetchAll(PDO::FETCH_ASSOC);

 if ($fila){
    echo '<script>alert ("ESTE PAQUETE YA EXISTE //CAMBIELO//"):</script>';
    $validacion=0; 
 }
 else {
    $cifrado = password_hash($pass,PASSWORD_DEFAULT, array("pass"=>12));

    $insertSQL = $con->prepare ("INSERT INTO ingresos_park (fecha_ingreso,juego_favorito) VALUES ('$fecha, '$juego')");
    $insertSQL -> execute();
    $validacion=1;
 }

?>

<script src="formulario.js"></script>


