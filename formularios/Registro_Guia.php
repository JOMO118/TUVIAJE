<?php
include("../connection/Connection.php");

?>

<html>

<head>
    <meta charset="utf-8" />
    <title> Registro </title>
    <link rel="stylesheet" href="../fonts/style.css">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        background-size: cover;
        background-position: center;
    }


</style>


<body background="../imagen/Fondo registro.jpg">




    <form action="../Acciones/Reg_guia.php" method="post" class="register_form" enctype="multipart/form-data">

        <h3>REGISTRO GUÍA TURÍSTICO</h3>

        <div class="input-form">
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                aria-describedby="basic-addon1" name="Nombre_guia" required>
        </div>


        <div class="input-form">
            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido"
                aria-describedby="basic-addon1" name="Apellido_guia" required>
        </div>


        <div class="input-form">
            <input type="text" class="form-control" placeholder="Cedula" aria-label="Cedula"
                aria-describedby="basic-addon1" name="Cedula_guia" required>
        </div>
        
        <div class="input-form">
            <input type="number" class="form-control" placeholder="Celular" aria-label="Celular"
                aria-describedby="basic-addon1" name="Celular_guia" required>
        </div>

        <div class="input-form">
            <input type="number" class="form-control" placeholder="Edad" aria-label="Edad"
                aria-describedby="basic-addon1" name="Edad_guia" required>
        </div>
        
        <div>
            <label>
                Pais:
            </label>
            <select name="Pais_guia" class="input-form">

            <?php
                $sql = "select *from procedencia where estado ='activo'";
                $result = mysqli_query($con, $sql);
                
                while ($row = mysqli_fetch_assoc($result)) {
                    
                ?>
                
                <option value="<?php echo $row['Id']?>"><?php echo $row['Nombre']?> </option>

                <?php
                }
                ?>
                
            </select>
        </div>

        <div class="input-form">
            <input type="text" class="form-control" placeholder="Ciudad" aria-label="Ciudad"
                aria-describedby="basic-addon1" name="Ciudad_guia" required>
        </div>

        <div class="input-form">
            <input type="text" class="form-control" placeholder="Direccion" aria-label="Direccion"
                aria-describedby="basic-addon1" name="Direccion_guia" required>
        </div>



        <div>
            <label>
                Sexo
            </label>
            <select name="Sexo_guia" class="input-form">
                <option value="m"> Masculino</option>
                <option value="f"> Femenino</option>
            </select>
        </div>

        <div class="input-form">
            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                aria-describedby="basic-addon1" name="Email_guia" required>
        </div>

        <div class="input-form">
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contrasena"
                aria-describedby="basic-addon1" name="Contrasena_guia" required>
        </div>

        <div>
            <label>
                Medio de pago membresía:
            </label>
            <select name="Pago" class="input-form">
                <option value="PSE"> PSE</option>
                <option value="BANCOLOMBIA"> Bancolombia</option>
                <option value="DAVIVIENDa"> DAVIVIENDA</option>
                <option value="EFECTY"> Efecty</option>
                <option value="PAYPAL"> PayPal</option>
            </select>
        </div>


        <label>
            Subir foto:
        </label> <br>
        <span class="icon-upload"></span> <input type="file" name="foto_guia">(*)

        <div>
            <input id="Enviar-guia" type="submit" value="Enviar" class="btn btn-primary" />
        </div>
    </form>



    <hr>
    <br>
    <ul>
        <li>
            <a href="Principal.html">Inicio</a>
        </li>
        <li>
            <a href="Contacto.html">Contacto</a>
        </li>

    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>