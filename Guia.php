<?php

include("connection/Connection.php");

session_start();
$nombre_usuario = $_SESSION["Nombre"];
$apellido_usuario = $_SESSION["Apellidos"];
$Id = $_SESSION["Id"];
$Foto = $_SESSION["Foto"];

if (isset($_GET["Sitio"])) {
    $dato_recibido = $_GET["Sitio"];


    $sql = "SELECT * FROM sitio WHERE estado ='activo' AND id = $dato_recibido";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre = $row["Nombre"];
        $descripcion = $row["Descripcion"];
        $imagen = $row["Imagen"];
    }
} else {
    $dato_recibido = null;
}


?>


<!doctype html>

<html lang="en">

<head>
<script src="JQUERY.js"></script>
    <script src="JS/mostrar_playas_guia.js"></script>
    <script src="JS/tabla_contratos.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GUIAS</title>
</head>
<style>
  body {
      margin: 0;
      padding: 0;
      background-size: cover;
      background-position: center;
  }

  a{
    font-size: 20px;
  }

</style>
<body id="contenido_fondo">

    <main class="container-fluid vh-100 ">
     
        <header class="row " style="height: 12%;  background-color: rgba(0, 0, 0, 0.4);">
            <div class="col-8  d-flex justify-content-end align-items-center">
                <h1 style="color: white;">TUVIAJE.COM </h1>


            </div>

            <div class="col-4  d-flex justify-content-end align-items-center">

            <div class="d-grid gap-4 d-md-block">
                <button onclick="mostrar_tabla()" style="margin-right: 15px;" type="button" class="btn btn-primary position-relative">
                    Inbox
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                    <?php
                        $sql = "SELECT * FROM contrato WHERE Estado ='solicitado' and Guia_Id= $Id";
                        $result = mysqli_query($con, $sql);
                        echo mysqli_num_rows($result);  
                        ?>
                        
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
                            <a href="Acciones/Logout.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Salir</button></a>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <main class="row " style="min-height: 90%;">
            <aside class="col-2 background">

                <div class="Profile_user">
                    <div class="avatar-user">
                        <abbr title="CAMBIAR PERFIL">
                            <a href="formularios/Conf_perfil.php"> <img
                                    src="<?php echo $Foto ?>"> </a>
                        </abbr>
                    </div>
                    <div class="Name_profile_user">
                        <p style="color: white;">
                            <?php echo $nombre_usuario." ".$apellido_usuario ?> 
                        </p>

                    </div>
                </div>

                <div class="pt-4">
                    <h4 style="color: black;">
                        PLAYAS
                    </h4>
                    <div class="list-group">


                    <?php
                        $sql = "SELECT * FROM sitio WHERE estado ='activo'";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a onclick="mostrar_playas_guia(<?php echo $row['Id']; ?>)" class="list-group-item list-group-item-action list-group-item-primary" id="grupo_playas">
                            <!-- <a href="Cliente.php?Sitio=<?php echo $row['Id']; ?>" class="list-group-item list-group-item-action list-group-item-primary">-->
                                <?php echo $row["Nombre"] ?> 
                            </a>
                            
                        <?php
                        }
                        ?>

                    </div>


                   

            </aside>


            <section class="col-10  d-flex justify-content-start align-items-center flex-wrap">

            <div id="contenido-playas">
            
                
                </div>

                
                <div id="contenido_tabla">
            
                
            </div>

            </section>
        </main>
      
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