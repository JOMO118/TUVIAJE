<?php
session_start();
$nombre_usuario = $_SESSION["Nombre"];
$apellido_usuario = $_SESSION["Apellidos"];
$Id = $_SESSION["Id"];
$Email = $_SESSION["Email"];
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
    <style>

    </style>
</head>

<body>
    <main class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <section class="row py-2" style="width: 85%;">
            <div class="col-12  d-flex justify-content-start align-items-center flex-wrap ">
                <div class="ms-5">
                    <h2>Informacion personal</h2>
                    <form action="../Acciones/cambiar_infromacion_cliente.php" class="row " method="post">
                        <div class="col-12">
                            <label>Nombre </label>
                            <div>
                                <input type="text" class="py-1 px-2 rounded border border-1 w-75" name="Nombre" value="<?php echo $nombre_usuario; ?>">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <label>Correo electronico </label>
                            <div>
                                <input type="text" class="py-1 px-2 rounded border border-1 w-75" name="Email" value="<?php echo $Email; ?>" readonly>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" name="token" class="btn btn-success mt-3">Actualizar Datos</button>
                            </div>
                        </div>
                    </form>
                    <form action="../Acciones/cambiar_contrasena_cliente.php" method="POST">
                        <h2 class="mt-3">Cambiar Contraseña</h2>

                        <div class="col-12 mt-2">
                            <label>Contraseña antigua</label>
                            <div>
                                <input name="password" class="py-1 px-2 rounded border border-1 w-75" required type="password" placeholder="**********">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <label class>Nueva contraseña
                            </label>
                            <div>
                                <input name="new_password" id="new_password" required class="py-1 px-2 rounded border border-1 w-75" type="password">
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <label class>Confirmar contraseña nueva</label>
                            <div>
                                <input name="confirm_new_password" id="confirm_new_password" required class="py-1 px-2 rounded border border-1 w-75" type="password">
                            </div>
                            <div class="d-none" id="msg-password">
                                <span class="text-danger fw-bold">*La contraseña debe coincidir</span>
                            </div>
                        </div>
                        <button class="btn btn-success mt-3"  type="submit">Cambiar contraseña</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="../JQUERY.js"></script>
    <script src="../JS/passwordsMacht.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>