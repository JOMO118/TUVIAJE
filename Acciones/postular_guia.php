<?php

include("../connection/Connection.php");

session_start();
$Id_playa = $_GET['Id_playa'];
$Id_guia =  $_SESSION["Id"];

$sql= "UPDATE tuviaje.guia set Destino_pos=$Id_playa where Id = $Id_guia ;";
$result = mysqli_query($con, $sql);

if ($result === false) {
    echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
  }

  header('Location:../Guia.php');
  die();

?>