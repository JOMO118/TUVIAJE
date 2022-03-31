<html>

<head>
    <meta charset="utf-8" />
    <title> SERVICIO GUIA </title>
    <link rel="stylesheet" href="fonts/style.css">
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

    #form-box {
        width: 30%;
        padding: 30px;
        margin: auto;
        margin-top: 100px;
        color: white;
        background-color: rgba(0, 0, 0, 0.9);
        /* backdrop-filter: blur(10px);  */
        box-shadow: 7px 13px 37px black;
    }
</style>

<body background="imagen/Fondo contacto.jpg">

    <center>
        <h1>TUVIAJE.COM </h1>
    </center>
    <hr>

    <main id="form-box">

    <form action="Acciones/login_existente.php" method="post" >
        <center> <h2 >Inicia sesión</h2>  </center>
        <div class="input-form">
            <div style="width: 100%" ; class="input-group mb-2">
                <input type="text" class="form-control" placeholder="Cuenta" aria-label="Cuenta"
                    aria-describedby="basic-addon1" name="Email" required>
                <span class="input-group-text" id="basic-addon1"><span class="icon-user"></span></span>

            </div>
            <div style="width: 100%" ; class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contrasena"
                    aria-describedby="basic-addon1" name="Contrasena" required>
                <span class="input-group-text" id="basic-addon1"><span class="icon-key"></span></span>
            </div>

            <input style="width: 100%" type="submit" value="Entrar" class="btn btn-dark" />
                &nbsp;&nbsp;
                </form>

            <main class="row " style="min-height: 5%;">
                

                <div class="pt-1" class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recordar Correo
                    </label>
                </div>
            </main>
            <br>
            <a style="color: white;" href="Recuperar_contraseña.html">¿Olvidó su nombre de usuario o contraseña?</a>
        </div>



    </main>

    <br>
    <ul>
        <li>

            <a href="index.php">
                <p style="font-weight: bold;">Inicio</p>
            </a>
        </li>
        <li>
            <a href="Contacto.html">
                <p style="font-weight: bold;">Contacto </p>
            </a>
        </li>

    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>