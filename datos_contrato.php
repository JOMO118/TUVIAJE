<?php
include("connection/Connection.php");
session_start();

$Id = $_SESSION["Id"];


$sql = "SELECT cliente.Nombres, cliente.Apellidos, cliente.Email, Cliente.Celular, contrato.Hora, contrato.fecha
        FROM contrato INNER JOIN cliente ON contrato.Cliente_Id = cliente.Id WHERE Guia_Id = $Id";
$result = mysqli_query($con, $sql);

      $contenido_tabla="
          <table class='table table-dark table-hover'>
          <thead>
            <tr>
              <th scope='col'>Nombre</th>
              <th scope='col'>Apellido</th>
              <th scope='col'>Celular</th>
              <th scope='col'>Correo</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Hora</th>
              <th scope='col'></th>
              <th scope='col'></th>
            </tr>
          </thead>
          <tbody>";
          
          while ($row = mysqli_fetch_assoc($result)) {
            $contenido_tabla.="<tr class= 'talbe table-primary'>
          <td>$row[Nombres]</td>
          <td>$row[Apellidos]</td>
          <td>$row[Celular]</td>
          <td>$row[Email]</td>
          <td>$row[fecha]</td>
          <td>$row[Hora]</td>
          <td><button class ='btn btn-danger'> Rechazar</button></td>
          <td><button class ='btn btn-success'> Aceptar</button></td>
        </tr>";
          }


        $contenido_tabla.=" </tbody>
        </table>";
                

       echo $contenido_tabla

   ?>
   