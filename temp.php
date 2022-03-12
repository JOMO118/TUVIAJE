<?php
include("connection/Connection.php");
session_start();


if (isset($_SESSION["Id"])) {
  $Id = $_SESSION["Id"];
} else {
  $Id = null;
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/estilos.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>


  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Correo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $i = 1;
      $sql = "SELECT cliente.Nombres, cliente.Apellidos, cliente.Email, Cliente.Celular, contrato.Hora, contrato.fecha
              FROM contrato INNER JOIN cliente ON contrato.Cliente_Id = cliente.Id WHERE Guia_Id = $Id";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr class= "talbe table-primary">
          <th scope="row"><?php echo $i++ ?></th>
          <td><?php echo $row["Nombres"] ?></td>
          <td><?php echo $row["Apellidos"] ?></td>
          <td><?php echo $row["Email"] ?></td>
          <td><?php echo $row["fecha"] ?></td>
          <td><?php echo $row["Hora"] ?></td>
        </tr>

      <?php
      }
      ?>
    </tbody>
  </table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>