<?php

include("../connection/Connection.php");

$cedula=$_POST['Cedula_user'];
$nombre=$_POST['Nombre_user'];
$apellido =$_POST['Apellido_user'];
$celular = $_POST['Celular_user'];
$edad = $_POST['Edad_user'];
$pais =$_POST['Pais_user'];
$ciudad =$_POST['Ciudad_user'];
$sexo =$_POST['Sexo_user'];
$email =$_POST['Email_user'];
$contrasena =$_POST['Contrasena_user'];



$verificar_correo = mysqli_query($con, "SELECT * FROM cliente WHERE Email='$email'");
$verificar_cedula = mysqli_query($con, "SELECT * FROM cliente WHERE Email='$cedula'");

if(mysqli_num_rows($verificar_correo) > 0){

  echo"
  <script>
   alert('Correo existente intenta con otro');
   window.location='../formularios/Registro.php'
</script>";

  die();

}

if(mysqli_num_rows($verificar_cedula) > 0){

  echo"
  <script>
   alert('Documento de identificacion existente intenta con otro');
   window.location='../formularios/Registro.php'
</script>";

  die();
}

$sql= "INSERT INTO `login` (`Estado`, `Contrasena`, `Correo`, `Rol_Id_rol`)
 VALUES ('activo', '$contrasena', '$email','1');";
$result = mysqli_query($con, $sql);

if ($result === false) {
    echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error;;
  }
  $credencialid = $con->insert_id;
  $sql= "INSERT INTO cliente (`Id`, `Nombres`, `Apellidos`, `Celular`, `Edad`, `Email`, `Estado`, `Procedencia_Id`, `login_Id`) 
  VALUES ('$cedula', '$nombre', '$apellido', '$celular', '$edad', '$email', 'activo', '$pais',$credencialid);";
  $result = mysqli_query($con, $sql);
  
  if ($result === false) {
      echo " <p class='text-white'> SQL Error en credenciales: </p>".$con->error; 
    }
  
  header('Location:../login.php');
            die();
?>
