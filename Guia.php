<?php

include("connection/Connection.php");

if (isset($_GET["Sitio"])) {
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
// $dato_recibido = $_GET["Sitio"];
// if (true === isset($dato_recibido)){
//     $sql = "select *from sitio where estado ='activo' and id = $dato_recibido";
// }else{
//     $sql ="select *from sitio where estado ='activo'";
// }



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>

    <main class="container-fluid vh-100 ">
        <header class="row " style="height: 10%;">
            <div class="col-8  d-flex justify-content-end align-items-center">
                <h1>TUVIAJE.COM </h1>

            </div>

            <div class="col-4  d-flex justify-content-end align-items-end">

            <div class="d-grid gap-4 d-md-block">
                <button style="margin-right: 15px;" type="button" class="btn btn-primary position-relative">
                    Inbox
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cerrar Sesion
                </button>

                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Esta seguro que quiere cerrar sesion?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button>
                                <button type="button" class="btn btn-primary">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="row " style="min-height: 90%;">
            <aside class="col-3 background">

                <div class="Profile_user">
                    <div class="avatar-user">
                        <abbr title="CAMBIAR PERFIL">
                            <a href="Conf_perfil.php"> <img
                                    src="https://pbs.twimg.com/media/D-Ft50KXsAQreOr?format=jpg&amp;name=large"> </a>
                        </abbr>
                    </div>
                    <div class="Name_profile_user">
                        <p>
                            NOMBRE APELLIDO
                        </p>

                    </div>
                </div>

                <div class="pt-4">
                    <h4>
                        jjj
                    </h4>
                    <div class="list-group">


                    <?php
                        $sql = "select *from sitio where estado ='activo'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a onclick="mostrar_playas(<?php echo $row['Id']; ?>)" class="list-group-item list-group-item-action list-group-item-primary">
                            <!-- mostrar_playas(<?php echo $row['Id']; ?>) <a href="Cliente.php?Sitio=<?php echo $row['Id']; ?>" class="list-group-item list-group-item-action list-group-item-primary">-->
                                <?php echo $row["Nombre"] ?> 
                            </a>
                            
                        <?php
                        }
                        ?>

                    </div>


                    <div>
                        <h4>
                            INFORMACIÓN GUIA
                        </h4>
                        <div class="list-group">
                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-secondary">Información
                                personal</a>

                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-secondary">Reservas</a>
                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-secondary">Historial
                                viajes</a>
                            <a href="#"
                                class="list-group-item list-group-item-action list-group-item-secondary">Calificar
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
                            <div>
                            <button type="button" class="btn btn-dark">Postularme</button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?> -->
                
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>