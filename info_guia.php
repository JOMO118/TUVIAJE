<?php

include("connection/Connection.php");

$datos_guia =array();
if (isset($_GET["Id"])) {
    $dato_recibido = $_GET["Id"];

                $sql = "select *from guia where estado ='activo'and Id = $dato_recibido";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $datos_guia[] = $row;

                }
        
} else {
    $dato_recibido = null;
}

echo json_encode($datos_guia) ;
 ?>