<?php
include("../connection/Connection.php");
// require_once "mensajes_correo.php";
require_once "Enviar_whatsapp.php";


// $enviar = new  mensajes_correo();
$envia_wa = new mensajes_whatsapp();
session_start();


$Id_guia = $_POST["id_guia"];
$Fecha = $_POST["fecha"];
$Hora = $_POST["hora"];
$Id_usuario = $_SESSION["Id"];
$Id_sitio =$_SESSION["Id_playa"];


$sql= "INSERT INTO `tuviaje`.`contrato` (`Estado`,`Fecha`,`Hora`,`Cliente_Id`, `Guia_Id`, `Sitio_Id`) 
VALUES ('solicitado','$Fecha','$Hora','$Id_usuario', '$Id_guia', '$Id_sitio');";

$result = mysqli_query($con, $sql);

$dataUser = array();




if($result===True){

  $sql = "SELECT * FROM `tuviaje`.`guia` WHERE `Id` = $Id_guia";
  $result2 = mysqli_query($con, $sql);

  while($row = $result2->fetch_assoc()){
    $dataUser[] = $row;
  }
  // $enviar-> send_email( $dataUser[0]["Email"], $Fecha, $Hora);
  $envia_wa-> Enviar_whatsapp($Fecha, $Hora);
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