<?php

session_start();

$Id_guia = $_GET["Id_guia"];
$nombre_usuario = $_SESSION["Id"];

echo $Id_guia." + ".$nombre_usuario;
?>