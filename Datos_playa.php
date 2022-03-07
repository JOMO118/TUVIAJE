<?php
include("connection/Connection.php");
$datos =array();
if (isset($_GET["Sitio"])) {
    $dato_recibido = $_GET["Sitio"];


    $sql = "select *from sitio where estado ='activo' and id = $dato_recibido";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $datos[] = $row;
        // $nombre = $row["Nombre"];
        // $descripcion = $row["Descripcion"];
        // $imagen = $row["Imagen"];
    }
} else {
    $dato_recibido = null;
}
echo json_encode($datos) ;
?>