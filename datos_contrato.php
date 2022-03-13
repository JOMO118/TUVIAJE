<?php
include("connection/Connection.php");
session_start();

$Id = $_SESSION["Id"];


$sql = "SELECT cliente.Nombres, cliente.Apellidos, cliente.Email, Cliente.Celular, contrato.Hora, contrato.fecha
        FROM contrato INNER JOIN cliente ON contrato.Cliente_Id = cliente.Id WHERE Guia_Id = $Id";
$result = mysqli_query($con, $sql);
 while ($row = mysqli_fetch_assoc($result)) {
  $datos_contrato[] = $row;
      }



    echo json_encode($datos_contrato) ;
      ?>
   