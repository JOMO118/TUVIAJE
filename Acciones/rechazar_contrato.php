<?php
    include("../connection/Connection.php");
    $id_contrato = $_GET["id"];
    
    $sql = "UPDATE contrato SET Estado = 'rechazado' WHERE Id = $id_contrato";
    $result = mysqli_query($con, $sql);
    if ($result === false) {
        echo " <p class='text-white'> SQL Error : </p>".$con->error;;
    }else{
        echo"
        <script>
            alert('Se ha rechazado a el cliente');
            window.location='../Guia.php'
        </script>";
        die();
    }
?>