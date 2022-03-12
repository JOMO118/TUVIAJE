<?php
include("../connection/Connection.php");

?>


<html>

<head>
    <meta charset="utf-8" />
    <title> Registro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Estilos.css" />

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


    <form  action="../Acciones/Reg_user.php" method="post" class="register_form">

        <h3> <center> REGISTRO CLIENTE </center> </h3>
        <br>

        <div class="input-form">
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre"
                aria-describedby="basic-addon1" name="Nombre_user" required>
        </div>



        </div>
        <div class="input-form">
            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido"
                aria-describedby="basic-addon1" name="Apellido_user" required>
        </div>



        <div class="input-form">
            <input type="number" class="form-control" placeholder="Cedula" aria-label="Cedula"
                aria-describedby="basic-addon1" name="Cedula_user" required>
        </div>

        <div class="input-form">
            <input type="number" class="form-control" placeholder="Celular" aria-label="Celular"
                aria-describedby="basic-addon1" name="Celular_user" required>
        </div>

        <div class="input-form">
            <input type="number" class="form-control" placeholder="Edad" aria-label="Edad"
                aria-describedby="basic-addon1" name="Edad_user" required>
        </div>




        <label>
                Pais:
            </label>
            <select name="Pais_user" class="input-form">

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


        <div class="input-form">
            <input type="text" class="form-control" placeholder="Ciudad" aria-label="Ciudad"
                aria-describedby="basic-addon1" name="Ciudad_user" required>
        </div>


        <div>
            <label>
                Sexo
            </label>
            <select name="Sexo_user" class="input-form" >
                <option value="m"> Masculino</option>
                <option value="f"> Femenino</option>
            </select>
        </div>



        <div class="input-form">
            <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                aria-describedby="basic-addon1" name="Email_user" required>
        </div>


        <div class="input-form">
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contrasena"
                aria-describedby="basic-addon1" name="Contrasena_user" required>
        </div>

        <input id="Enviar-cliente" type="submit" value="Enviar" class="btn btn-primary">
    </form>


    <hr>    

    <ul>
        <li>
            <a href="../principal.html">Inicio</a>
        </li>
        <li>
            <a href="../Contacto.html">Contacto</a>
        </li>

    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>