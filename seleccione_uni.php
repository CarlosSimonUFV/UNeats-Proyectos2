<?php
session_start();

if (isset($_GET['uni'])) {
    $_SESSION['uni']  = $_GET['uni'];	
	
}
header("Location: /UNeats-Proyectos2/");
?>