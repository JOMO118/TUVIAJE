<?php
include("../connection/Connection.php");

if(isset($_POST['SubirCalificacion'])){

  session_start();
  $id_cliente= $_SESSION["Id"];
  
  $puntos = $_POST['estrellas'];
  $id_guia= $_POST["id_guia"];
    
    
    $sql = "INSERT INTO  `tuviaje`.`calificacion` ( `Puntos`, `Cliente_Id`, `guia_Id`)
     VALUES ('$puntos', '$id_cliente', '$id_guia');";
    $result = mysqli_query($con, $sql);

    if ($result === false) {
        echo " <p class='text-white'> SQL Error en credenciales: </p>" . $con->error;;
      }

      echo"
      <script>
       alert('Calificacion enviada');
       window.location='../Cliente.php'
    </script>";
    
      die();

}


?>