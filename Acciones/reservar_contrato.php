<?php
include("../connection/Connection.php");
require_once "mensajes_correo.php";


$enviar = new  mensajes_correo();

session_start();


$Id_guia = $_POST["id_guia"];
$Fecha = $_POST["fecha"];
$Hora = $_POST["hora"];
$Id_usuario = $_SESSION["Id"];
$Id_sitio =$_SESSION["Id_playa"];


$sql= "INSERT INTO `tuviaje`.`contrato` (`Estado`,`Fecha`,`Hora`,`Cliente_Id`, `Guia_Id`, `Sitio_Id`) 
VALUES ('solicitado','$Fecha','$Hora','$Id_usuario', '$Id_guia', '$Id_sitio');";

$result = mysqli_query($con, $sql);

if($result===True){
$enviar-> send_email("danielorobio0316@gmail.com", $Fecha, $Hora);
}


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