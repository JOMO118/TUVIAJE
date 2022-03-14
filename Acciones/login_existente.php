<?php

include("../connection/Connection.php");

$email =$_POST['Email'];
$contrasena =$_POST['Contrasena'];

$validar_login = mysqli_query($con, "SELECT * FROM `login` WHERE Correo='$email' AND contrasena='$contrasena'");


if ($validar_login == false) {  
    echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
}

  $dataUser = array();
  if(mysqli_num_rows($validar_login )>0){
        while($row = $validar_login ->fetch_assoc()){
            $dataUser[] = $row;
        }
  }else 
  {
    echo"<script>
    alert('correo o contraseña incorrecta');
    window.location='../login.php'
 </script>";
 die();
  }
  
  
    session_start();
    $_SESSION["Id_rol"]= $dataUser[0]["Rol_Id_rol"];

if($_SESSION["Id_rol"]==1){
    $Id_cliente= $dataUser[0]['Id'];
    $conocer_id =  mysqli_query($con,"SELECT  Id, Nombres, Apellidos, Email FROM `cliente` where login_Id=$Id_cliente");
    $dataCliente = array();
    if ($conocer_id == false) {
        echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
    }
    while($row = $conocer_id ->fetch_assoc()){
        $dataCliente[] = $row;
    }
    $_SESSION["Id"]=$dataCliente[0]["Id"];
    $_SESSION["Nombre"]=$dataCliente[0]["Nombres"];
    $_SESSION["Apellidos"]=$dataCliente[0]["Apellidos"];
    $_SESSION["Email"]=$dataCliente[0]["Email"];
    
    header('Location:../Cliente.php');
        die();

} else if ($_SESSION["Id_rol"]==2){
    $Id_guia= $dataUser[0]['Id'];
    $conocer_id =  mysqli_query($con,"SELECT  Id, Nombre, Apellidos, Email, Foto FROM `guia` where login_Id=$Id_guia");
    $dataGuia = array();
    if ($conocer_id == false) {
        echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
    }
    while($row = $conocer_id ->fetch_assoc()){
        $dataGuia[] = $row;
    }
    $_SESSION["Id"]=$dataGuia[0]["Id"];
    $_SESSION["Nombre"]=$dataGuia[0]["Nombre"];
    $_SESSION["Apellidos"]=$dataGuia[0]["Apellidos"];
    $_SESSION["Email"]=$dataGuia[0]["Email"];
    $_SESSION["Foto"] = $dataGuia[0]["Foto"];
    header('Location:../Guia.php');
    die();
   
}
// $_SESSION["Id"]=;

// if(mysqli_num_rows($validar_login) > 0){
//     header('Location:Cliente.php');
// }else{
//     header('Location:login.php');
// }


// $validar_login = mysqli_query($con, "SELECT * FROM `login_guia` login
// WHERE Correo_guia='$email' AND contrasena_guia='$contrasena'");

// if ($validar_login === false) {
//     echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
//   }

// if(mysqli_num_rows($validar_login) > 0){
//     header('guia.php');
// }else{
//     header('Location:login.php');
// }
