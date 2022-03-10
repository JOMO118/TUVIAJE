<?php
include("../connection/Connection.php");




session_start();

$Id_guia = $_POST["id_guia"];
$fecha  = $_POST["fecha"];
$hora  = $_POST["hora"];
$Id_usuario = $_SESSION["Id"];
$Id_sitio =$_SESSION["Id_playa"];

$sql= "INSERT INTO `tuviaje`.`contrato` (`Estado`,`Cliente_Id`, `Guia_Id`, `Sitio_Id`) 
VALUES ('solicitado','$Id_usuario', '$Id_guia', '$Id_sitio');";

$result = mysqli_query($con, $sql);



if ($result === false) {
    echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
  }


  echo"
  <script>
   alert('Se hizo la solicitud; espere respuesta');
   window.location='../Cliente.php'
</script>";

  die();
?>