<?php

include("connection/Connection.php");


session_start();
$nombre_usuario = $_SESSION["Nombres"];
$apellido_usuario = $_SESSION["Apellidos"];

/*if (isset($_GET["Sitio"])) {
    $dato_recibido = $_GET["Sitio"];


    $sql = "select *from sitio where estado ='activo' and id = $dato_recibido";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre = $row["Nombre"];
        $descripcion = $row["Descripcion"];
        $imagen = $row["Imagen"];
    }
} else {
    $dato_recibido = null;
}

*/

?>

<!doctype html>

<html lang="en">

<head>
    <script src="JQUERY.js"></script>
    <script src="mostrar_playas.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>

    <main class="container-fluid vh-100 ">
        <header class="row " style="height: 10%;">
            <div class="col-8  d-flex justify-content-end align-items-center">
                <h1>TUVIAJE.COM </h1>

            </div>

            <div class="col-4  d-flex justify-content-end align-items-end">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cerrar Sesion
                </button>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Esta seguro que quiere cerrar sesion?
                            </div>
                            <div class="modal-footer">
                                <a href="Acciones/Logout.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button></a>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="row " style="min-height: 90%;">
            <aside class="col-3 background">

            <div class="Profile_user">
                <div  class="avatar-user">
                    <abbr title="CAMBIAR PERFIL">
                    <a href="Conf_perfil.php"> <img src="https://pbs.twimg.com/media/D-Ft50KXsAQreOr?format=jpg&amp;name=large"> </a>
                    </abbr>
                </div>
                <div class="Name_profile_user">
                    <p>
                    <?php echo $nombre_usuario." ".$apellido_usuario ?> 
                    </p>

                </div>
            </div> 

                <div class="pt-4">
                    <h4>
                        PLAYAS
                    </h4>
                    <div class="list-group">


                        <?php
                        $sql = "select *from sitio where estado ='activo'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a onclick="mostrar_playas(<?php echo $row['Id']; ?>)" class="list-group-item list-group-item-action list-group-item-primary">
                            <!-- <a href="Cliente.php?Sitio=<?php echo $row['Id']; ?>" class="list-group-item list-group-item-action list-group-item-primary">-->
                                <?php echo $row["Nombre"] ?> 
                            </a>
                        <?php
                        }
                        ?>

                    </div>


                    <div>
                        <h4>
                            INFORMACIÓN CLIENTE
                        </h4>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Información
                                personal</a>

                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Reservas</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Historial
                                viajes</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Calificar
                                guía</a>

                        </div>


            </aside>


            <section class="col-9 pt-5    d-flex justify-content-start align-items-center flex-wrap ">
<div id="contenido-playas">
                <!-- <?php
                if (true === (isset($dato_recibido))) {
                ?>

                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="<?php echo $imagen; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $nombre; ?>
                                </h5>
                                <p class="card-text" style="text-align:justify;">
                                    <?php echo $descripcion; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?> -->
</div>


                <?php
                $sql = "select *from guia where estado ='activo'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $nom_completo = $row["Nombre"] . ' ' . $row["Apellidos"];
                ?>

                    <div>
                        <div class="image-flip">
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src=" data:<?php echo $row['Nombre'] ?>;base64, <?php echo base64_encode($row['Foto']) ?>" card image></p>
                                            <!-- <p><img class=" img-fluid" src="<?php //echo $row["Foto"] 
                                                                                    ?>" card image></p> -->
                                            <h4 class="card-title">
                                                <?php echo $row["Nombre"] ?>
                                            </h4>
                                            <p class="card-text">
                                                <?php echo $row["Edad"] ?> AÑOS
                                            </p> <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside ">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">

                                            <h4 class="card-title">
                                                <?php echo $nom_completo ?>
                                            </h4>
                                            <p class="card-text">Calificación: </p>
                                            <p class="card-text">Celular:
                                                <?php echo $row["Celular"] ?>
                                            </p>
                                            <p class="card-text">Email:
                                                <?php echo $row["Email"] ?>
                                            </p>
                                            <a href=""><button type="button" class="btn btn-primary"> Solicitar reserva</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </section>
        </main>
        <footer class="row bg-warning" style="height: 70X;">

            <div class=" d-flex justify-content-end align-items-end">




                <ul>
                    <li>
                        <a href="principal.html">Inicio</a>
                    </li>
                    <li>
                        <a href="Contacto.html">Contacto</a>
                    </li>

                </ul>
            </div>
        </footer>
    </main>

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