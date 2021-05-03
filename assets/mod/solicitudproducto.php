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

        
        $recipient = "ufveats@gmail.com";
        $subject = "Contacto desde el sitio web";

        $message = "Detalles del formulario de contacto<br><br>";
        $message .= "Nombre del producto: " . $_POST['name'] . "<br>";
        $message .= "Descripción del producto: " . $_POST['descripcion'] . "<br>";
        $message .= "Ingredientes: " . $_POST['ingredientes'] . "<br>";
        $message .= "Calorias: " . $_POST['calorias'] . "<br>";
        $message .= "Precio: " . $_POST['precio'] . "<br><br>";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $email . "\r\n";
        
        require("connect.php");
        $fecha = new DateTime("now", new DateTimeZone("Europe/Madrid"));
        $insert_value = 'INSERT INTO solicitudproducto (Nombre, Descripción, Ingredientes, Calorias, Precio, Fecha) VALUES (\''.mysqli_real_escape_string($conexion,$_POST['Nombre']).'\',\''.mysqli_real_escape_string($conexion,$_POST['Descripción']).'\',\''.mysqli_real_escape_string($conexion,$_POST['Ingredientes']).'\',\''.mysqli_real_escape_string($conexion,$_POST['Calorias']).'\',\''.mysqli_real_escape_string($conexion,$_POST['Precio']).'\',\''.$fecha->format('Y-m-d H:i:s').'\')';
        if($conexion->query($insert_value) === TRUE){
            echo "<br>Gracias por contactarnos, recibirás respuestas pronto. <a href='../../'>Volver</a></p><br>";
            if(mail($recipient, $subject, $message, $headers)) {
                echo "<br><p>Gracias por contactarnos, $name. Recibirás respuestas pronto por correo";
            } else {
                echo '<br><p>Lo sentimos, la consulta no ha podido ser enviada por correo.';
            }
        }else{
            echo '<p>Lo sentimos, la consulta no ha podido ser enviada.<a href="../../">Volver</a></p>';
        }
    }else{
        header("Location ../../");
    }
     
}
?>