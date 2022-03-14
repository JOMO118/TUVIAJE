<?php
session_start();
$nombre_usuario = $_SESSION["Nombre"];
$apellido_usuario = $_SESSION["Apellidos"];
$Id = $_SESSION["Id"];
$Email = $_SESSION["Email"];
$Foto = $_SESSION["Foto"];
?>


<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>


    <div class="row">
        <div class="col-3 background">
            <div>
                <img  style="width: 100%; display: block;" src="../<?php echo $Foto ?>" />
            </div>
            <span >
                <form method="post"  enctype="multipart/form-data">
                    Cambiar Imagen de perfil: <input type="file" name="file">
                </form>
            </span>

            <div class="col-9 pt-5    d-flex justify-content-start align-items-center flex-wrap ">


                <div class="x_panel">
                    <div class="x_title">
                        <h2>Informacion personal</h2>
                    </div>

                    <div class="x_content">
                        <br />
                        <form action="" method="post">
                            <div>
                                <label>Nombre </label>
                                <div>
                                    <input type="text" name="Nombre" value="<?php echo $nombre_usuario; ?>">
                                </div>
                            </div>
                            <div>
                                <label>Correo electronico </label>
                                <div>
                                    <input type="text" name="Email" value="<?php echo $Email; ?>" readonly>
                                </div>
                            </div>

                            <br><br>
                            <h2>Cambiar Contraseña</h2>

                            <div>
                                <label>Contraseña antigua</label>
                                <div>
                                    <input name="password" type="password" placeholder="**********">
                                </div>
                            </div>
                            <div>
                                <label class>Nueva contraseña
                                </label>
                                <div>
                                    <input name="new_password" type="password">
                                </div>
                            </div>
                            <div>
                                <label class>Confirmar contraseña nueva</label>
                                <div>
                                    <input name="confirm_new_password" type="password">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button type="submit" name="token" class="btn btn-success">Actualizar Datos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>