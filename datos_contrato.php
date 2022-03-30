<?php
include("connection/Connection.php");
session_start();

$Id = $_SESSION["Id"];


$sql = "SELECT cliente.Nombres, cliente.Apellidos, cliente.Email, Cliente.Celular, contrato.Hora, contrato.fecha, contrato.Id as id_contrato
        FROM contrato INNER JOIN cliente ON contrato.Cliente_Id = cliente.Id WHERE Guia_Id = $Id and contrato.Estado = 'solicitado' ";
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
          <td><a href ='Acciones/rechazar_contrato.php?id=".$row["id_contrato"]." ' > <button class ='btn btn-danger'> Rechazar</button></a></td>
          <td><a href ='Acciones/aceptar_contrato.php?id=".$row["id_contrato"]." '  ><button class ='btn btn-success'> Aceptar</button></a></td>
        </tr>";
          }


        $contenido_tabla.=" </tbody>
        </table>";
                

       echo $contenido_tabla

   ?>
   