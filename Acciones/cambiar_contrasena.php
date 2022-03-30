<?php
   include("../connection/Connection.php");

   $password = $_POST["password"];
   $newPassword = $_POST["new_password"];
   $confirm_new_password = $_POST["confirm_new_password"];
   session_start();
   $Id_guia =  $_SESSION["Id"];
   $email = $_SESSION["Email"];
   if($newPassword !== $confirm_new_password){
    echo"
        <script>
        alert('Las contraseñas no coinceden');
        window.location='../Guia.php'
    </script>";
   }else{

        $sql= "SELECT contrasena FROM tuviaje.login  where Correo = '$email ';";
        $result = mysqli_query($con, $sql);
        $dataGuia = array();

        while($row = $result ->fetch_assoc()){
            $dataGuia = $row;
        }

        if(password_verify($password,$dataGuia["contrasena"])){
            $passwordIncriptada = password_hash($newPassword,PASSWORD_DEFAULT,['cost'=>10]);
            $sql= "UPDATE  tuviaje.login SET Contrasena = '$passwordIncriptada'  WHERE Correo = '$email ';";
            $result = mysqli_query($con, $sql);
            if($result!=false){
                echo"
                <script>
                    alert('Se ha cambiado la contraseña');
                    window.location='../Guia.php'
                </script>";
            }
        }else{
            echo"
            <script>
                alert('Las contraseña actual no es correcta');
                window.location='../formularios/Conf_perfil.php'
            </script>";
        }
    }
?>