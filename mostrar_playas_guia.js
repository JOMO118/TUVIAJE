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
                <img src="${dato.imagen}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                    ${dato.imagen}
                    </h5>
                    <p class="card-text" style="text-align:justify;">
                    ${dato.descripcion}
                    </p>
                </div>
                <div>
                <button type="button" class="btn btn-dark">Postularme</button>
                </div>
            </div>
        </div>
        `;
    });
            document.getElementById('contenido-playasguias').innerHTML= template;

        }
      });
}