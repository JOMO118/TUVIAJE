<?php

include("connection/Connection.php");

$datos_guia =array();
if (isset($_GET["Sitio"])) {
    $dato_recibido = $_GET["Sitio"];

                $sql = "select *from guia where estado ='activo'and Destino_pos = $dato_recibido ";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $datos_guia[] = $row;

                }
        
} else {
    $dato_recibido = null;
}

echo json_encode($datos_guia) ;
 ?>