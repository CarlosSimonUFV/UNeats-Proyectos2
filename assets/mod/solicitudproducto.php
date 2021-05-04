<?php
 
if($_POST) {
    $name = "";
    $descripcion = "";
    $ingredientes = "";
    $calorias = "";
    $precio = "";
     
    if(isset($_POST['name'])) {
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if(!empty($_POST['name']) && !empty($_POST['descripcion']) && !empty($_POST['ingredientes']) && !empty($_POST['calorias']) && !empty($_POST['precio'])){

        require("connect.php");
        $fecha = new DateTime("now", new DateTimeZone("Europe/Madrid"));
        $insert_value = 'INSERT INTO solicitudproducto (nombre, descripcion, ingredientes, calorias, precio, fecha) VALUES (\''.mysqli_real_escape_string($conexion,$_POST['name']).'\',\''.mysqli_real_escape_string($conexion,$_POST['descripcion']).'\',\''.mysqli_real_escape_string($conexion,$_POST['ingredientes']).'\',\''.mysqli_real_escape_string($conexion,$_POST['calorias']).'\',\''.mysqli_real_escape_string($conexion,$_POST['precio']).'\',\''.$fecha->format('Y-m-d H:i:s').'\')';
        if($conexion->query($insert_value) === TRUE){
            echo "<br>Gracias por la solicitud, lo añadiremos pronto . <a href='../../'>Volver</a></p><br>";
        }else{
            echo '<p>Lo sentimos, la solicitud no ha podido ser enviada.<a href="../../">Volver</a></p>';
        }
    }else{
        header("Location ../../");
    }
}
?>