<?php
   include("../connection/Connection.php");

   session_start();
   $nombre =  $_POST["Nombre"];
   $Id_guia =  $_SESSION["Id"];

  
    $sql= "UPDATE tuviaje.guia set guia.Nombre = '$nombre' where Id = $Id_guia ;";
    $result = mysqli_query($con, $sql);
    if($result != false){
        $_SESSION["Nombre"] = $nombre;
        echo"
        <script>
         alert('Se ha actulizado la informacion');
         window.location='../Guia.php'
      </script>";
        die();
    }

?>