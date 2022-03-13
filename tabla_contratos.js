function mostrar_tabla() {
    
    $.ajax({
        url: "datos_contrato.php",
        success: function (response) {
            var resultado3 = JSON.parse(response);
            let template1 = "";
            resultado3.forEach((dato) => {

                template1 += `
                <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                  </tr>
                </thead>
                <tbody>
                
                <tr class= "talbe table-primary">
                <td>${dato.Nombres}</td>
                <td>${dato.Apellidos}</td>
                <td>${dato.Celular}</td>
                <td>${dato.Email}</td>
                <td>${dato.fecha}</td>
                <td>${dato.Hora}</td>
              </tr>

              </tbody>
              </table>

               
            `;
            });
            document.getElementById('contenido-playas').innerHTML = template1;
            document.getElementById('contenido-tabla').innerHTML = "";
        }
    });
}

