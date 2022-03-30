<?php
   include("../connection/Connection.php");

   session_start();
   $nombre =  $_POST["Nombre"];
   $Id_cliente =  $_SESSION["Id"];

  
    $sql= "UPDATE tuviaje.cliente set cliente.Nombres = '$nombre' where Id = $Id_cliente ;";
    $result = mysqli_query($con, $sql);
    if($result != false){
        $_SESSION["Nombre"] = $nombre;
        echo"
        <script>
         alert('Se ha actulizado la informacion');
         window.location='../Cliente.php'
      </script>";
        die();
    }

?>