<?php

include("connection/Connection.php");
session_start();
$dato_recibido = $_SESSION["Id"];
$datos_guia =array();


                $sql = "SELECT guia.Foto, guia.Nombre, guia.Edad, guia.Apellidos, guia.Celular, guia.email, guia.Id FROM contrato
                INNER JOIN guia
                ON guia.Id = contrato.Guia_id
                WHERE contrato.Estado = 'finalizado' AND Cliente_Id = $dato_recibido;";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $datos_guia[] = $row;

                }
        

echo json_encode($datos_guia) ;
 ?>