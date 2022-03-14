function mostrar_playas_guia(Id_playa) {



    $.ajax({
        type: "GET",
        url: "Datos_playa.php?Sitio="+Id_playa,
        success: function (response) {
        var resultado = JSON.parse(response);

        resultado.forEach((dato) => {


            template =        `

            <div class="row g-0">
            <div class="col-md-6">
                <img src="${dato.Imagen}" class="img-fluid rounded-start" alt="...">
            </div >
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="color: white;" >
                    ${dato.Nombre}
                    </h5>
                    ${dato.Descripcion}
                    </p>
                </div>
                
                <div>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  postularme
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Postularse</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Esta seguro que quiere postularse?
      </div>
      <div class="modal-footer">
      <a href="Acciones/postular_guia.php?Id_playa=${dato.Id}"> <button type="button" class="btn btn-primary">Confirmar</button> </a>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
      </div>
    </div>
  </div>
</div>
               
                </div>
            </div>
        </div>
        `;
    });
            document.getElementById('contenido-playas').innerHTML= template;

        }
      });
}