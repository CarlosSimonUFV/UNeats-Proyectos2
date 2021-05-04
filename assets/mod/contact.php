<?php
 
if($_POST) {
    $name = "";
    $email = "";
    $consulta = "";
    $asunto = "";
    $mensaje = "";
     
    if(isset($_POST['name'])) {
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['consulta']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){

        require("connect.php");
        $fecha = new DateTime("now", new DateTimeZone("Europe/Madrid"));
        $insert_value = 'INSERT INTO contacto (nombre, email, consulta, asunto,mensaje, fecha) VALUES (\''.mysqli_real_escape_string($conexion,$_POST['name']).'\',\''.mysqli_real_escape_string($conexion,$_POST['email']).'\',\''.mysqli_real_escape_string($conexion,$_POST['consulta']).'\',\''.mysqli_real_escape_string($conexion,$_POST['asunto']).'\',\''.mysqli_real_escape_string($conexion,$_POST['mensaje']).'\',\''.$fecha->format('Y-m-d H:i:s').'\')';
        if($conexion->query($insert_value) === TRUE){
            echo "<br>Gracias por contactarnos, recibirás respuestas pronto. <a href='../../'>Volver</a></p><br>";
        }else{
            echo '<p>Lo sentimos, la consulta no ha podido ser enviada.<a href="../../">Volver</a></p>';
        }
    }else{
        header("Location ../../");
    }
     
}
?>