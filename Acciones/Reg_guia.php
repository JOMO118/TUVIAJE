<?php

include("../connection/Connection.php");

$cedula = $_POST['Cedula_guia'];
$nombre = $_POST['Nombre_guia'];
$apellido = $_POST['Apellido_guia'];
$celular = $_POST['Celular_guia'];
$edad = $_POST['Edad_guia'];
$pais = $_POST['Pais_guia'];
$direccion = $_POST['Direccion_guia'];
$ciudad = $_POST['Ciudad_guia'];
$sexo = $_POST['Sexo_guia'];
$email = $_POST['Email_guia'];
$contrasena = $_POST['Contrasena_guia'];
$pago = $_POST['Pago'];

$contrasena_encrip = password_hash($contrasena, PASSWORD_DEFAULT, ['cost' => 10]);



// $foto=addslashes(file_get_contents($_FILES['foto_guia']['tmp_name']));

$directorio = "fotos/";
$archivo = $directorio . basename($_FILES["foto_guia"]["name"]);
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$checarSiImagen = getimagesize($_FILES["foto_guia"]["tmp_name"]);


//var_dump($size);
if ($checarSiImagen != false) {
  $size = $_FILES["file-1"]["size"];
  if (move_uploaded_file($_FILES["foto_guia"]["tmp_name"], '../fotos/'.basename($_FILES["foto_guia"]["name"]))) {
    echo "<script>alert('exito');</script>";
  }else{
    echo "<script>alert('exito');</script>";
  }
} else {
  echo "<script>alert('fallo');</script>";;
}

//Verificar si no hay correos repetidos en la Bases de Datos

$verificar_correo = mysqli_query($con, "SELECT * FROM guia WHERE Email='$email'");
$verificar_cedula = mysqli_query($con, "SELECT * FROM guia WHERE Id='$cedula'");

if (mysqli_num_rows($verificar_correo) > 0) {

  echo "
  <script>
   alert('Correo existente intenta con otro');
   window.location='../formularios/Registro_Guia.php'
</script>";

  die();
}
if (mysqli_num_rows($verificar_cedula) > 0) {

  echo "
  <script>
   alert('Cedula existente intenta con otra');
   window.location='../formularios/Registro_Guia.php'
</script>";

  die();
}





$sql = "INSERT INTO `login` (`Estado`, `Contrasena`, `Correo`, `Rol_Id_rol`)
 VALUES ('activo', '$contrasena_encrip', '$email','2');";
$result = mysqli_query($con, $sql);


if ($result === false) {
  echo " <p class='text-white'> SQL Error en credenciales: </p>" . $con->error;;
}

$credencialid = $con->insert_id;
$sql = "INSERT INTO `tuviaje`.`guia` (`Id`, `Nombre`, `Apellidos`, `Celular`, `Edad`, `Email`, `Direccion`, `Genero`, `Estado`, `Tipo_pago`,`Foto`, `Foto_tipo`,`login_Id`)
  VALUES ('$cedula', '$nombre', '$apellido', '$celular', '$edad', '$email', '$direccion','$sexo','activo', '$pago', '$archivo' , '$tipo_foto',$credencialid);";
$result = mysqli_query($con, $sql);

if ($result === false) {
  echo "  class='text-white'> SQL Error en credenciales:" . $con->error;
  echo "  fallo en la inserwsion del guia" . $con->error;
}


header('Location:../login.php');
die();
